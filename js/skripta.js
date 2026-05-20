// Izvajanje animacij ob vidnosti elementa z določenim classom:

// boundingClientRect: intersectionRatio
// threshold - what percentage of the target's visibility the observer's callback should be executed
// https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API

const observer = new IntersectionObserver ((entries, observer) => {
        entries.forEach(entry => {

            // ko je element v viewportu
            if (entry.intersectionRatio >= 0.9) {
                // doda active class
                entry.target.classList.add("active");
                
                // animacija je samo 1x
                observer.unobserve(entry.target); // po tistem jih ne gleda več!!! 
            }
        });
    },
    {
        threshold: 0.9
    }
);

// gledamo vse elemente, ki imajo class animatedHeading ali scaleAnimation...
const elements = document.querySelectorAll('.animatedHeading, .scaleAnimation');

for (let i = 0; i < elements.length; i++) { 
    observer.observe(elements[i]);
}





/* --- OPRAVILA --- */

let todos = []; // naredimo prazno tabelo

let maxId = 0; // da lahko vsakič id povečamo za 1

// vsakič ko kliknemo enter, resitira stran, zato dodamo eventListener da to prepreči in sproži addTodo:
const form = document.getElementById('form-enter-key');

if (form) {
    form.addEventListener('submit', function(e) { // type: tip gumba submit, listener: 
        e.preventDefault();
        addTodo();
    });
}



function addTodo() {
    const input = document.getElementById("todo-input"); // input -> value, zato dobimo tekst
    const inputText = input.value.trim();

    if (inputText === "") { 
        return; // konča, če je tekst prazen
    }

    todos.push (
        {
            "id" : maxId,
            "done": false, // lažje uporabljati boolean
            "value": inputText
        }
    );
    
    maxId++;

    input.value = ""; // zbrišemo tekst v input fieldu

    renderAllTasks(); // ponovno izpiše oz updejta seznam opravil
}

function editTodo (id) {
    
    // želimo, da se original zbriše in ustvari nov, vendar, da se value vpiše v input tekst,
    // katerega se potem lahko preimenuje in ga ponovno doda na seznam

    let todo = null;

    // iskanje po arrayu
    for (let i = 0; i < todos.length; i++) {

        // primerja vsakega z danim id-jem
        if (todos[i].id === id) {

            // če se ujemata, ga shrani v "todo"
            todo = todos[i];
            break;
        }
    }

    const input = document.getElementById("todo-input");

    // 1. text vpiši nazaj v input
    input.value = todo.value;
    input.focus(); // da ne rabimo sami klikniti v okence

    // 2. odstrani task iz arraya
    removeTodo(id); // uporabimo obstoječo funkcijo

    // 3. ponovno izriši seznam -> ne potrebujem, ker to naredi že v removeTodo

}

function removeTodo(id) {

    for (let i = 0; i < todos.length; i++) {
        const todo = todos[i];

        if (todo["id"] === id) {
            // če je true, ga zbriši
            todos.splice(i, 1) // start: starta na indexu kjer je, count: koliko jih zbriše -> 1
            break;
        }
    }

    renderAllTasks(); // updejta prikazovanje taskov na page-u
}

// za spreminjanje vrednosti done -> true ali false
function toggleTodo(id) {
    for (let i = 0; i < todos.length; i++) {

        // če je id, ki ga iščemo enak trenutnemu id
        if (todos[i].id === id) {

            //
            todos[i].done = !todos[i].done; // spremeni status -> ! pomeni negacijo -> če je bil prej true, je sedaj false in obratno
            break;

            // v renderAllTasks() smo dodali, da doda class done za prikaz spremembe
        }
    }

    renderAllTasks();
}



// prikazovanje todo-jev
function renderAllTasks() {
    const list = document.getElementById("todo-list"); // poišče ul, ki ima id todo-list

    list.innerHTML = ""; // spraznemo trenutni seznam

    for (let i = 0; i < todos.length; i++) {
        
        const todo = todos[i];

        const li = document.createElement("li"); // naredimo nov li
        li.className = "todo-element"; //dodamo mu class


        // preverimo, če je todo done in checked/unchecked -> lahko bi s ternarnim operatorjem const doneClass = todo.done ? "done" : "";
        let doneClass = "";
        if (todo.done === true) {
            doneClass = "done"; // če je true, dodamo class
        } else {
            doneClass = ""; // drugače pustimo prazno
        }

        let checked = "";
        if (todo.done === true) { // če ima class done
            checked = "checked"; // dodaj atribut checked
        } else {
            checked = ""; // ga ne dodaj
        }

        // dodamo vse kar gre v li za ta task
        // HTML checkbox ima atribut checked -> če je, je obkljukan, če ga ni, ni obkljukan
        li.innerHTML =
            `<input type="checkbox" id="todo-${todo.id}" ${checked} onChange="toggleTodo(${todo.id})">

            <label for="todo-${todo.id}" class="custom-checkbox"> 
                <img src="img/checkDark.png" alt="checkbox">
            </label>
            

            <label id="todo-element${todo.id}" class="todo-text ${doneClass}">
                ${todo.value}
            </label>

            <button class="edit-button" onClick="editTodo(${todo.id})">
                <img src="img/editSquareDark.png" alt="delete">
            </button>

            <button class="delete-button" onClick="removeTodo(${todo.id})">
                <img src="img/trashDark.png" alt="delete">
            </button>`
        
        list.appendChild(li); // dodamo task na seznam
    }

    updateStats(); // update-a število taskov in progress bar
}

// UPDATING STATS
function updateStats() {
    
    // pogledamo najprej če je sploh kakšen task
    if (todos.length > 0) {

        let completedTodos = 0; // prazna spremenljivka za končane taske

        // gre čez celo tabelo todos
        for (let i = 0; i < todos.length; i++) {
            
            // če ima class done
            if (todos[i].done === true) {
                completedTodos++; // poveča za eno
            }
        }
        
        const totalTodos = todos.length;

        // spremenimo tekst v kvadratku
        document.getElementById("progress-number").innerText = `${completedTodos} / ${totalTodos}`;


        // spremenimo dolžino progress bara
        // ali je totalTodos enak 0, če da potem je 0, drugače izračunaj procente
        const percent = totalTodos === 0 ? 0 : (completedTodos / totalTodos) * 100;

        document.getElementById("progress").style.width = percent + "%";


        // spremenimo tekst v progress-text
        const progressText = document.getElementById("progress-text");

        if (percent === 100) {
            progressText.innerText = `Huraa, uspelo ti je! 🎉`;

            // prikažemo gif animacijo
            const gif = document.getElementById("confetti-gif");
            gif.style.opacity = "1";
            startConfettiTimer(); // po 5s je opacity spet na 0
        }
        else if (percent >= 70) {
            progressText.innerText = `Skoraj končano!`;
        }
        else if (percent >= 40) {
            progressText.innerText = `Super ti gre, kar tako naprej!`;
        }
        else if (percent >= 20) {
            progressText.innerText = `Z vsakim opravljenim opravilom si bližje cilju.`;
        }
        else {
            progressText.innerText = `Začetek je najtežji!`;
        }
        

    } else {

    // spremenimo tekst v kvadratku v "0 / 0"
    document.getElementById("progress-number").innerText = `0 / 0`;
    }
}

function hideConfetti() {
    document.getElementById("confetti-gif").style.opacity = "0";
}

function startConfettiTimer() {
    // funkcija, ki se zažene 2x (1 ponovitev = 5s)
    setTimeout(hideConfetti, 10000);
}

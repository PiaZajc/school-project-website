# Modern-todo-website
Responsive multi-page website project built with HTML5, CSS3, JavaScript, PHP 8.4 and Bootstrap 5. Features include a carousel homepage, responsive navigation, To-Do list application with JavaScript functionality, contact form validation using PHP, reusable components (header/footer) and mobile-friendly design.

A responsive multi-page website project built for a Web Programming seminar assignment using HTML5, CSS3, JavaScript, PHP 8.4, and Bootstrap 5.3.8.

The website is written primarily in Slovenian and includes reusable PHP components, custom animations, responsive layouts, form validation, and an interactive To-Do list application.

---

## Features

### Multi-page Website
The project contains multiple PHP pages with a shared layout structure:

- `index.php`
- `o-meni.php`
- `opravila.php`
- `kontakt.php`

Reusable components:
- `header.php`
- `footer.php`
- `menu.php`

---

## Technologies Used

- HTML5
- CSS3
- JavaScript
- PHP 8.4
- Bootstrap 5.3.8

All Bootstrap files are stored locally (no CDN usage).

---

## Main Functionality

### Responsive Design
- Mobile-friendly layout
- Bootstrap grid system
- Responsive navigation bar
- Optimized for different screen sizes

### Interactive To-Do List
Located on `opravila.php`.

Features:
- Add tasks dynamically
- Mark tasks as completed
- Undo completed tasks
- Delete tasks
- Live task statistics
- Animated progress bar
- Confetti animation when completing tasks

### PHP Form Validation
Located on `kontakt.php`.

Validation includes:
- Required fields
- Name validation
- Email validation
- Phone number validation
- Bootstrap alert messages for errors/success

### Reusable PHP Components
The website uses reusable PHP:
- shared header
- shared footer
- dynamic navigation menu

---

## Animations

Custom CSS animations were created manually using `@keyframes` and JavaScript class toggling.

Examples include:
- slide-in page headings
- scale & bounce animations
- animated progress indicators
- visual transitions

---

## Project Structure

```text
├── index.php
├── o-meni.php
├── opravila.php
├── kontakt.php
├── header.php
├── footer.php
├── menu.php
│
├── css
│   └── stil.css
│
├── js
│   └── skripta.js
│
├── img
│
├── fonts
│
└── lib
    └── bootstrap-5.3.8-dist
```

---

## Website Sections

### Home Page (`index.php`)
- Bootstrap navbar
- Bootstrap carousel
- Responsive tables
- Styled landing section

### About Me (`o-meni.php`)
- Personal information
- Favorite links
- Favorite movies
- Images
- Tables and formatted content

### Tasks (`opravila.php`)
- Fully interactive To-Do application
- JavaScript task management
- Progress tracking
- Animations and visual feedback

### Contact (`kontakt.php`)
- Contact form
- HTML5 validation
- PHP backend validation
- Bootstrap alerts

---

## Notes

- Some variable names and text content are written in Slovenian.
- Bootstrap is used locally instead of CDN imports.
- Custom CSS was added alongside Bootstrap styling for additional animations and UI improvements.

---

Created as a seminar project for Web Programming.

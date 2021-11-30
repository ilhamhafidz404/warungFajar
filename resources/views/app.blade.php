<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  @if (request()->is('table-product'))
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.16.2/dist/full.css" rel="stylesheet" type="text/css" />
  @endif
  <link rel="shortcut icon" href="{{asset('cleopatra/dist')}}/img/fav.png" type="image/x-icon">  
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('cleopatra/dist')}}/css/style.css">  --}}
  <style>
    @import url("https://fonts.googleapis.com/css?family=Ubuntu&display=swap");
html {
  line-height: 1.15; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
}
body {
  margin: 0;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
hr {
  box-sizing: content-box; /* 1 */
  height: 0; /* 1 */
  overflow: visible; /* 2 */
}
a {
  background-color: transparent;
}
small {
  font-size: 80%;
}
button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-size: 100%; /* 1 */
  line-height: 1.15; /* 1 */
  margin: 0; /* 2 */
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */

button,
input { /* 1 */
  overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */

button,
select { /* 1 */
  text-transform: none;
}

/**
 * Correct the inability to style clickable types in iOS and Safari.
 */

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

/**
 * Remove the inner border and padding in Firefox.
 */

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/**
 * Restore the focus styles unset by the previous rule.
 */

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

textarea {
  overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10.
 */

[type="checkbox"],
[type="radio"] {
  box-sizing: border-box; /* 1 */
  padding: 0; /* 2 */
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */

[type="search"] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/**
 * Remove the inner padding in Chrome and Safari on macOS.
 */

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

[hidden] {
  display: none;
}

/**
 * Manually forked from SUIT CSS Base: https://github.com/suitcss/base
 * A thin layer on top of normalize.css that provides a starting point more
 * suitable for web applications.
 */

/**
 * Removes the default spacing and border for appropriate elements.
 */

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

button {
  background-color: transparent;
  background-image: none;
  padding: 0;
}

/**
 * Work around a Firefox/IE bug where the transparent `button` background
 * results in a loss of the default `button` focus styles.
 */

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

fieldset {
  margin: 0;
  padding: 0;
}

ol,
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

/**
 * Tailwind custom reset styles
 */

/**
 * 1. Use the user's configured `sans` font-family (with Tailwind's default
 *    sans-serif font stack as a fallback) as a sane default.
 * 2. Use Tailwind's default "normal" line-height so the user isn't forced
 *    to override it to ensure consistency even when using the default theme.
 */

html {
  font-family: Ubuntu, Sans-serif; /* 1 */
  line-height: 1.5; /* 2 */
}

/**
 * 1. Prevent padding and border from affecting element width.
 *
 *    We used to set this in the html element and inherit from
 *    the parent element for everything else. This caused issues
 *    in shadow-dom-enhanced elements like <details> where the content
 *    is wrapped by a div with box-sizing set to `content-box`.
 *
 *    https://github.com/mozdevs/cssremedy/issues/4
 *
 *
 * 2. Allow adding a border to an element by just adding a border-width.
 *
 *    By default, the way the browser specifies that an element should have no
 *    border is by setting it's border-style to `none` in the user-agent
 *    stylesheet.
 *
 *    In order to easily add borders to elements by just setting the `border-width`
 *    property, we change the default border-style for all elements to `solid`, and
 *    use border-width to hide them instead. This way our `border` utilities only
 *    need to set the `border-width` property instead of the entire `border`
 *    shorthand, making our border utilities much more straightforward to compose.
 *
 *    https://github.com/tailwindcss/tailwindcss/pull/116
 */

*,
::before,
::after {
  box-sizing: border-box; /* 1 */
  border-width: 0; /* 2 */
  border-style: solid; /* 2 */
  border-color: #e2e8f0; /* 2 */
}

/*
 * Ensure horizontal rules are visible by default
 */

hr {
  border-top-width: 1px;
}

/**
 * Undo the `border-style: none` reset that Normalize applies to images so that
 * our `border-{width}` utilities have the expected effect.
 *
 * The Normalize reset is unnecessary for us since we default the border-width
 * to 0 on all elements.
 *
 * https://github.com/tailwindcss/tailwindcss/issues/362
 */

img {
  border-style: solid;
}

textarea {
  resize: vertical;
}

input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: #a0aec0;
}

input::-moz-placeholder, textarea::-moz-placeholder {
  color: #a0aec0;
}

input:-ms-input-placeholder, textarea:-ms-input-placeholder {
  color: #a0aec0;
}

input::-ms-input-placeholder, textarea::-ms-input-placeholder {
  color: #a0aec0;
}

input::placeholder,
textarea::placeholder {
  color: #a0aec0;
}

button,
[role="button"] {
  cursor: pointer;
}

table {
  border-collapse: collapse;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/**
 * Reset links to optimize for opt-in styling instead of
 * opt-out.
 */

a {
  color: inherit;
  text-decoration: inherit;
}

/**
 * Reset form element properties that are easy to forget to
 * style explicitly so you don't inadvertently introduce
 * styles that deviate from your design system. These styles
 * supplement a partial reset that is already applied by
 * normalize.css.
 */

button,
input,
optgroup,
select,
textarea {
  padding: 0;
  line-height: inherit;
  color: inherit;
}

/**
 * Constrain images and videos to the parent width and preserve
 * their instrinsic aspect ratio.
 *
 * https://github.com/mozdevs/cssremedy/issues/14
 */

img,
video {
  max-width: 100%;
  height: auto;
}

.container{
  width: 100%;
}

/* PrismJS 1.19.0
https://prismjs.com/download.html#themes=prism-tomorrow&languages=markup+css+clike+javascript+http+javadoclike+json+jsonp+json5+markup-templating+php+phpdoc+plsql+python+sass+scss+sql&plugins=unescaped-markup+normalize-whitespace+toolbar+copy-to-clipboard */

/**
 * prism.js tomorrow night eighties for JavaScript, CoffeeScript, CSS and HTML
 * Based on https://github.com/chriskempson/tomorrow-theme
 * @author Rose Pritchard
 */

code[class*="language-"],
pre[class*="language-"] {
  color: #ccc;
  background: none;
  font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
  font-size: 1em;
  text-align: left;
  white-space: pre;
  word-spacing: normal;
  word-break: normal;
  word-wrap: normal;
  line-height: 1.5;
  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;
  -webkit-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
}

/* Code blocks */

body, h1, h2, h3, h4, h5, h6, p, a {
  text-transform: capitalize
}

p {
  letter-spacing: 0.05em;
  font-size: 0.875rem;
  --text-opacity: 1;
  color: #a0aec0;
  color: rgba(160, 174, 192, var(--text-opacity))
}

.h1 {
  font-size: 4rem;
  font-weight: 900
}

.h2 {
  font-size: 3rem;
  font-weight: 800
}

.h3 {
  font-size: 2.25rem;
  font-weight: 800
}

.h4 {
  font-size: 1.875rem;
  font-weight: 800
}

.h5 {
  font-size: 1.5rem;
  font-weight: 800
}

.h6 {
  font-size: 1.25rem;
  font-weight: 800
}

.card {
  border-radius: 0.25rem;
  --bg-opacity: 1;
  background-color: #fff;
  background-color: rgba(255, 255, 255, var(--bg-opacity));
  border-width: 1px;
  --border-opacity: 1;
  border-color: #e2e8f0;
  border-color: rgba(226, 232, 240, var(--border-opacity))
}

.card .card-header {
  border-bottom-width: 1px;
  padding: 1.5rem
}

.card .card-body {
  padding: 1.5rem
}

.card .card-footer {
  border-top-width: 1px;
  padding: 1.5rem
}

.btn-shadow {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #4fd1c5;
  background-color: rgba(79, 209, 197, var(--bg-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  --text-opacity: 1;
  color: #fff;
  color: rgba(255, 255, 255, var(--text-opacity));
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)
}

.btn-shadow:hover {
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)
}

.btn {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #b2f5ea;
  background-color: rgba(178, 245, 234, var(--bg-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  --text-opacity: 1;
  color: #319795;
  color: rgba(49, 151, 149, var(--text-opacity));
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}

.btn:hover {
  --bg-opacity: 1;
  background-color: #81e6d9;
  background-color: rgba(129, 230, 217, var(--bg-opacity));
  --text-opacity: 1;
  color: #285e61;
  color: rgba(40, 94, 97, var(--text-opacity))
}

.btn-indigo {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #667eea;
  background-color: rgba(102, 126, 234, var(--bg-opacity));
  --text-opacity: 1;
  color: #ebf4ff;
  color: rgba(235, 244, 255, var(--text-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}

.btn-indigo:hover {
  --bg-opacity: 1;
  background-color: #5a67d8;
  background-color: rgba(90, 103, 216, var(--bg-opacity));
  --text-opacity: 1;
  color: #c3dafe;
  color: rgba(195, 218, 254, var(--text-opacity))
}

.btn-info {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #faf089;
  background-color: rgba(250, 240, 137, var(--bg-opacity));
  --text-opacity: 1;
  color: #d69e2e;
  color: rgba(214, 158, 46, var(--text-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}

.btn-info:hover {
  --bg-opacity: 1;
  background-color: #f6e05e;
  background-color: rgba(246, 224, 94, var(--bg-opacity));
  --text-opacity: 1;
  color: #d69e2e;
  color: rgba(214, 158, 46, var(--text-opacity))
}

.btn-danger {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #feb2b2;
  background-color: rgba(254, 178, 178, var(--bg-opacity));
  --text-opacity: 1;
  color: #e53e3e;
  color: rgba(229, 62, 62, var(--text-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}

.btn-danger:hover {
  --bg-opacity: 1;
  background-color: #fc8181;
  background-color: rgba(252, 129, 129, var(--bg-opacity));
  --text-opacity: 1;
  color: #e53e3e;
  color: rgba(229, 62, 62, var(--text-opacity))
}

.btn-gray {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #f7fafc;
  background-color: rgba(247, 250, 252, var(--bg-opacity));
  border-width: 1px;
  --border-opacity: 1;
  border-color: #e2e8f0;
  border-color: rgba(226, 232, 240, var(--border-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  --text-opacity: 1;
  color: #718096;
  color: rgba(113, 128, 150, var(--text-opacity));
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}

.btn-gray:hover {
  --bg-opacity: 1;
  background-color: #fff;
  background-color: rgba(255, 255, 255, var(--bg-opacity));
  --text-opacity: 1;
  color: #2d3748;
  color: rgba(45, 55, 72, var(--text-opacity));
  border-width: 1px;
  --border-opacity: 1;
  border-color: #e2e8f0;
  border-color: rgba(226, 232, 240, var(--border-opacity))
}

.btn-bs-dark {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #1a202c;
  background-color: rgba(26, 32, 44, var(--bg-opacity));
  --text-opacity: 1;
  color: #fff;
  color: rgba(255, 255, 255, var(--text-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}

.btn-bs-dark:hover {
  opacity: 0.75
}

.btn-bs-primary {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #5a67d8;
  background-color: rgba(90, 103, 216, var(--bg-opacity));
  --text-opacity: 1;
  color: #fff;
  color: rgba(255, 255, 255, var(--text-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}

.btn-bs-primary:hover {
  opacity: 0.75
}

.btn-bs-secondary {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #a0aec0;
  background-color: rgba(160, 174, 192, var(--bg-opacity));
  --text-opacity: 1;
  color: #fff;
  color: rgba(255, 255, 255, var(--text-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}

.btn-bs-secondary:hover {
  opacity: 0.75
}

.btn-bs-success {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #48bb78;
  background-color: rgba(72, 187, 120, var(--bg-opacity));
  --text-opacity: 1;
  color: #fff;
  color: rgba(255, 255, 255, var(--text-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}

.btn-bs-success:hover {
  opacity: 0.75
}

.btn-bs-danger {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #f56565;
  background-color: rgba(245, 101, 101, var(--bg-opacity));
  --text-opacity: 1;
  color: #fff;
  color: rgba(255, 255, 255, var(--text-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}

.btn-bs-danger:hover {
  opacity: 0.75
}

.btn-bs-info {
  text-align: center;
  text-transform: capitalize;
  --bg-opacity: 1;
  background-color: #ecc94b;
  background-color: rgba(236, 201, 75, var(--bg-opacity));
  --text-opacity: 1;
  color: #fff;
  color: rgba(255, 255, 255, var(--text-opacity));
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  border-radius: 0.25rem;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}

.btn-bs-info:hover {
  opacity: 0.75
}

.badge {
  padding: 2px 0;
  padding-left: 0.5rem;
  padding-right: 0.5rem
}

.badge-primary {
  --bg-opacity: 1;
  background-color: #b2f5ea;
  background-color: rgba(178, 245, 234, var(--bg-opacity));
  border-width: 1px;
  --border-opacity: 1;
  border-color: #81e6d9;
  border-color: rgba(129, 230, 217, var(--border-opacity));
  --text-opacity: 1;
  color: #319795;
  color: rgba(49, 151, 149, var(--text-opacity));
  border-radius: 0.25rem;
  text-transform: lowercase
}

.report-card:hover .card {
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  --border-opacity: 1;
  border-color: #fff;
  border-color: rgba(255, 255, 255, var(--border-opacity));  transform: scale(1.01);
}

.report-card:hover .footer {
  padding: 0;
  border-width: 0
}

.report-card .footer, .report-card .card {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms
}
.bg-fixed{
  background-attachment: fixed;
}

.bg-local{
  background-attachment: local;
}

.bg-scroll{
  background-attachment: scroll;
}

.bg-transparent{
  background-color: transparent;
}

.bg-current{
  background-color: currentColor;
}

.bg-black{
  --bg-opacity: 1;
  background-color: #000;
  background-color: rgba(0, 0, 0, var(--bg-opacity));
}

.bg-white{
  --bg-opacity: 1;
  background-color: #fff;
  background-color: rgba(255, 255, 255, var(--bg-opacity));
}

.bg-gray-100{
  --bg-opacity: 1;
  background-color: #f7fafc;
  background-color: rgba(247, 250, 252, var(--bg-opacity));
}

.bg-gray-200{
  --bg-opacity: 1;
  background-color: #edf2f7;
  background-color: rgba(237, 242, 247, var(--bg-opacity));
}

.bg-gray-300{
  --bg-opacity: 1;
  background-color: #e2e8f0;
  background-color: rgba(226, 232, 240, var(--bg-opacity));
}

.bg-gray-400{
  --bg-opacity: 1;
  background-color: #cbd5e0;
  background-color: rgba(203, 213, 224, var(--bg-opacity));
}

.bg-gray-500{
  --bg-opacity: 1;
  background-color: #a0aec0;
  background-color: rgba(160, 174, 192, var(--bg-opacity));
}

.bg-gray-600{
  --bg-opacity: 1;
  background-color: #718096;
  background-color: rgba(113, 128, 150, var(--bg-opacity));
}

.bg-gray-700{
  --bg-opacity: 1;
  background-color: #4a5568;
  background-color: rgba(74, 85, 104, var(--bg-opacity));
}

.bg-gray-800{
  --bg-opacity: 1;
  background-color: #2d3748;
  background-color: rgba(45, 55, 72, var(--bg-opacity));
}

.bg-gray-900{
  --bg-opacity: 1;
  background-color: #1a202c;
  background-color: rgba(26, 32, 44, var(--bg-opacity));
}

.bg-red-400{
  --bg-opacity: 1;
  background-color: #fc8181;
  background-color: rgba(252, 129, 129, var(--bg-opacity));
}

.bg-red-500{
  --bg-opacity: 1;
  background-color: #f56565;
  background-color: rgba(245, 101, 101, var(--bg-opacity));
}

.bg-green-400{
  --bg-opacity: 1;
  background-color: #68d391;
  background-color: rgba(104, 211, 145, var(--bg-opacity));
}

.bg-green-500{
  --bg-opacity: 1;
  background-color: #48bb78;
  background-color: rgba(72, 187, 120, var(--bg-opacity));
}

.bg-blue-400{
  --bg-opacity: 1;
  background-color: #63b3ed;
  background-color: rgba(99, 179, 237, var(--bg-opacity));
}

.bg-blue-500{
  --bg-opacity: 1;
  background-color: #4299e1;
  background-color: rgba(66, 153, 225, var(--bg-opacity));
}

.bg-indigo-400{
  --bg-opacity: 1;
  background-color: #7f9cf5;
  background-color: rgba(127, 156, 245, var(--bg-opacity));
}

.bg-indigo-500{
  --bg-opacity: 1;
  background-color: #667eea;
  background-color: rgba(102, 126, 234, var(--bg-opacity));
}
.bg-opacity-0{
  --bg-opacity: 0;
}

.bg-opacity-25{
  --bg-opacity: 0.25;
}

.bg-opacity-50{
  --bg-opacity: 0.5;
}

.bg-opacity-75{
  --bg-opacity: 0.75;
}

.bg-opacity-100{
  --bg-opacity: 1;
}

.hover\:bg-opacity-0:hover{
  --bg-opacity: 0;
}

.hover\:bg-opacity-25:hover{
  --bg-opacity: 0.25;
}

.hover\:bg-opacity-50:hover{
  --bg-opacity: 0.5;
}

.hover\:bg-opacity-75:hover{
  --bg-opacity: 0.75;
}

.hover\:bg-opacity-100:hover{
  --bg-opacity: 1;
}

.focus\:bg-opacity-0:focus{
  --bg-opacity: 0;
}

.focus\:bg-opacity-25:focus{
  --bg-opacity: 0.25;
}

.focus\:bg-opacity-50:focus{
  --bg-opacity: 0.5;
}

.focus\:bg-opacity-75:focus{
  --bg-opacity: 0.75;
}

.focus\:bg-opacity-100:focus{
  --bg-opacity: 1;
}
.rounded-none{
  border-radius: 0;
}

.rounded-sm{
  border-radius: 0.125rem;
}

.rounded{
  border-radius: 0.25rem;
}

.rounded-md{
  border-radius: 0.375rem;
}

.rounded-lg{
  border-radius: 0.5rem;
}

.rounded-full{
  border-radius: 9999px;
}

.rounded-t-none{
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.rounded-r-none{
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.rounded-b-none{
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.rounded-l-none{
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.rounded-t-sm{
  border-top-left-radius: 0.125rem;
  border-top-right-radius: 0.125rem;
}

.rounded-r-sm{
  border-top-right-radius: 0.125rem;
  border-bottom-right-radius: 0.125rem;
}

.rounded-b-sm{
  border-bottom-right-radius: 0.125rem;
  border-bottom-left-radius: 0.125rem;
}

.rounded-l-sm{
  border-top-left-radius: 0.125rem;
  border-bottom-left-radius: 0.125rem;
}

.rounded-t{
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.rounded-r{
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.rounded-b{
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.rounded-l{
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.rounded-t-md{
  border-top-left-radius: 0.375rem;
  border-top-right-radius: 0.375rem;
}

.rounded-r-md{
  border-top-right-radius: 0.375rem;
  border-bottom-right-radius: 0.375rem;
}

.rounded-b-md{
  border-bottom-right-radius: 0.375rem;
  border-bottom-left-radius: 0.375rem;
}

.rounded-l-md{
  border-top-left-radius: 0.375rem;
  border-bottom-left-radius: 0.375rem;
}

.rounded-t-lg{
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}

.rounded-r-lg{
  border-top-right-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
}

.rounded-b-lg{
  border-bottom-right-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
}

.rounded-l-lg{
  border-top-left-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
}

.rounded-t-full{
  border-top-left-radius: 9999px;
  border-top-right-radius: 9999px;
}

.rounded-r-full{
  border-top-right-radius: 9999px;
  border-bottom-right-radius: 9999px;
}

.rounded-b-full{
  border-bottom-right-radius: 9999px;
  border-bottom-left-radius: 9999px;
}

.rounded-l-full{
  border-top-left-radius: 9999px;
  border-bottom-left-radius: 9999px;
}

.rounded-tl-none{
  border-top-left-radius: 0;
}

.rounded-tr-none{
  border-top-right-radius: 0;
}

.rounded-br-none{
  border-bottom-right-radius: 0;
}

.rounded-bl-none{
  border-bottom-left-radius: 0;
}

.rounded-tl-sm{
  border-top-left-radius: 0.125rem;
}

.rounded-tr-sm{
  border-top-right-radius: 0.125rem;
}

.rounded-br-sm{
  border-bottom-right-radius: 0.125rem;
}

.rounded-bl-sm{
  border-bottom-left-radius: 0.125rem;
}

.rounded-tl{
  border-top-left-radius: 0.25rem;
}

.rounded-tr{
  border-top-right-radius: 0.25rem;
}

.rounded-br{
  border-bottom-right-radius: 0.25rem;
}

.rounded-bl{
  border-bottom-left-radius: 0.25rem;
}

.rounded-tl-md{
  border-top-left-radius: 0.375rem;
}

.rounded-tr-md{
  border-top-right-radius: 0.375rem;
}

.rounded-br-md{
  border-bottom-right-radius: 0.375rem;
}

.rounded-bl-md{
  border-bottom-left-radius: 0.375rem;
}

.rounded-tl-lg{
  border-top-left-radius: 0.5rem;
}

.rounded-tr-lg{
  border-top-right-radius: 0.5rem;
}

.rounded-br-lg{
  border-bottom-right-radius: 0.5rem;
}

.rounded-bl-lg{
  border-bottom-left-radius: 0.5rem;
}

.rounded-tl-full{
  border-top-left-radius: 9999px;
}

.rounded-tr-full{
  border-top-right-radius: 9999px;
}

.rounded-br-full{
  border-bottom-right-radius: 9999px;
}

.rounded-bl-full{
  border-bottom-left-radius: 9999px;
}

.border-solid{
  border-style: solid;
}

.border-dashed{
  border-style: dashed;
}

.border-dotted{
  border-style: dotted;
}

.border-double{
  border-style: double;
}

.border-none{
  border-style: none;
}

.border-0{
  border-width: 0;
}

.border-2{
  border-width: 2px;
}

.border-4{
  border-width: 4px;
}

.border-8{
  border-width: 8px;
}

.border{
  border-width: 1px;
}

.border-t-0{
  border-top-width: 0;
}

.border-r-0{
  border-right-width: 0;
}

.border-b-0{
  border-bottom-width: 0;
}

.border-l-0{
  border-left-width: 0;
}

.border-t-2{
  border-top-width: 2px;
}

.border-r-2{
  border-right-width: 2px;
}

.border-b-2{
  border-bottom-width: 2px;
}

.border-l-2{
  border-left-width: 2px;
}

.border-t-4{
  border-top-width: 4px;
}

.border-r-4{
  border-right-width: 4px;
}

.border-b-4{
  border-bottom-width: 4px;
}

.border-l-4{
  border-left-width: 4px;
}

.border-t-8{
  border-top-width: 8px;
}

.border-r-8{
  border-right-width: 8px;
}

.border-b-8{
  border-bottom-width: 8px;
}

.border-l-8{
  border-left-width: 8px;
}

.border-t{
  border-top-width: 1px;
}

.border-r{
  border-right-width: 1px;
}

.border-b{
  border-bottom-width: 1px;
}

.border-l{
  border-left-width: 1px;
}

.box-border{
  box-sizing: border-box;
}

.box-content{
  box-sizing: content-box;
}

.cursor-auto{
  cursor: auto;
}

.cursor-default{
  cursor: default;
}

.cursor-pointer{
  cursor: pointer;
}

.cursor-wait{
  cursor: wait;
}

.cursor-text{
  cursor: text;
}

.cursor-move{
  cursor: move;
}

.cursor-not-allowed{
  cursor: not-allowed;
}

.block{
  display: block;
}

.inline-block{
  display: inline-block;
}

.inline{
  display: inline;
}

.flex{
  display: flex;
}

.inline-flex{
  display: inline-flex;
}

.table-row{
  display: table-row;
}

.flow-root{
  display: flow-root;
}

.grid{
  display: grid;
}

.inline-grid{
  display: inline-grid;
}

.hidden{
  display: none;
}

.flex-row{
  flex-direction: row;
}

.flex-row-reverse{
  flex-direction: row-reverse;
}

.flex-col{
  flex-direction: column;
}

.flex-col-reverse{
  flex-direction: column-reverse;
}

.flex-wrap{
  flex-wrap: wrap;
}

.flex-wrap-reverse{
  flex-wrap: wrap-reverse;
}

.flex-no-wrap{
  flex-wrap: nowrap;
}

.items-start{
  align-items: flex-start;
}

.items-end{
  align-items: flex-end;
}

.items-center{
  align-items: center;
}

.items-baseline{
  align-items: baseline;
}

.items-stretch{
  align-items: stretch;
}

.self-auto{
  align-self: auto;
}

.self-start{
  align-self: flex-start;
}

.self-end{
  align-self: flex-end;
}

.self-center{
  align-self: center;
}

.self-stretch{
  align-self: stretch;
}

.justify-start{
  justify-content: flex-start;
}

.justify-end{
  justify-content: flex-end;
}

.justify-center{
  justify-content: center;
}

.justify-between{
  justify-content: space-between;
}

.justify-around{
  justify-content: space-around;
}

.justify-evenly{
  justify-content: space-evenly;
}

.content-center{
  align-content: center;
}

.content-start{
  align-content: flex-start;
}

.content-end{
  align-content: flex-end;
}

.content-between{
  align-content: space-between;
}

.content-around{
  align-content: space-around;
}

.flex-1{
  flex: 1 1 0%;
}

.flex-auto{
  flex: 1 1 auto;
}

.flex-initial{
  flex: 0 1 auto;
}

.flex-none{
  flex: none;
}

.flex-grow-0{
  flex-grow: 0;
}

.flex-grow{
  flex-grow: 1;
}

.flex-shrink-0{
  flex-shrink: 0;
}

.flex-shrink{
  flex-shrink: 1;
}

.order-1{
  order: 1;
}

.order-2{
  order: 2;
}

.order-3{
  order: 3;
}

.order-4{
  order: 4;
}

.order-5{
  order: 5;
}

.order-6{
  order: 6;
}

.order-7{
  order: 7;
}

.order-8{
  order: 8;
}

.order-9{
  order: 9;
}

.order-10{
  order: 10;
}

.order-11{
  order: 11;
}

.order-12{
  order: 12;
}

.order-first{
  order: -9999;
}

.order-last{
  order: 9999;
}

.order-none{
  order: 0;
}

.float-right{
  float: right;
}

.float-left{
  float: left;
}

.float-none{
  float: none;
}

.clearfix:after{
  content: "";
  display: table;
  clear: both;
}

.clear-left{
  clear: left;
}

.clear-right{
  clear: right;
}

.clear-both{
  clear: both;
}

.clear-none{
  clear: none;
}

.font-sans{
  font-family: Ubuntu, Sans-serif;
}

.font-hairline{
  font-weight: 100;
}

.font-thin{
  font-weight: 200;
}

.font-light{
  font-weight: 300;
}
.font-bold{
  font-weight: 700;
}
.text-xs{
  font-size: 0.75rem;
}

.text-sm{
  font-size: 0.875rem;
}

.text-base{
  font-size: 1rem;
}

.text-lg{
  font-size: 1.125rem;
}

.text-xl{
  font-size: 1.25rem;
}

.text-2xl{
  font-size: 1.5rem;
}

.text-3xl{
  font-size: 1.875rem;
}

.text-4xl{
  font-size: 2.25rem;
}

.text-5xl{
  font-size: 3rem;
}

.text-6xl{
  font-size: 4rem;
}
.m-0{
  margin: 0;
}

.m-1{
  margin: 0.25rem;
}

.m-2{
  margin: 0.5rem;
}

.m-3{
  margin: 0.75rem;
}

.m-4{
  margin: 1rem;
}

.m-5{
  margin: 1.25rem;
}

.m-6{
  margin: 1.5rem;
}

.m-8{
  margin: 2rem;
}

.m-10{
  margin: 2.5rem;
}

.m-12{
  margin: 3rem;
}

.m-16{
  margin: 4rem;
}

.m-20{
  margin: 5rem;
}

.m-24{
  margin: 6rem;
}

.m-32{
  margin: 8rem;
}

.m-40{
  margin: 10rem;
}

.m-48{
  margin: 12rem;
}

.m-56{
  margin: 14rem;
}

.m-64{
  margin: 16rem;
}

.m-72{
  margin: 18rem;
}

.m-84{
  margin: 21rem;
}

.m-96{
  margin: 24rem;
}

.m-auto{
  margin: auto;
}

.m-px{
  margin: 1px;
}

.my-0{
  margin-top: 0;
  margin-bottom: 0;
}

.mx-0{
  margin-left: 0;
  margin-right: 0;
}

.my-1{
  margin-top: 0.25rem;
  margin-bottom: 0.25rem;
}

.mx-1{
  margin-left: 0.25rem;
  margin-right: 0.25rem;
}

.my-2{
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
}

.mx-2{
  margin-left: 0.5rem;
  margin-right: 0.5rem;
}

.my-3{
  margin-top: 0.75rem;
  margin-bottom: 0.75rem;
}

.mx-3{
  margin-left: 0.75rem;
  margin-right: 0.75rem;
}

.my-4{
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.mx-4{
  margin-left: 1rem;
  margin-right: 1rem;
}

.my-5{
  margin-top: 1.25rem;
  margin-bottom: 1.25rem;
}

.mx-5{
  margin-left: 1.25rem;
  margin-right: 1.25rem;
}

.my-6{
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}

.mx-6{
  margin-left: 1.5rem;
  margin-right: 1.5rem;
}

.my-8{
  margin-top: 2rem;
  margin-bottom: 2rem;
}

.mx-8{
  margin-left: 2rem;
  margin-right: 2rem;
}

.my-10{
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}

.mx-10{
  margin-left: 2.5rem;
  margin-right: 2.5rem;
}

.my-12{
  margin-top: 3rem;
  margin-bottom: 3rem;
}

.mx-12{
  margin-left: 3rem;
  margin-right: 3rem;
}

.my-16{
  margin-top: 4rem;
  margin-bottom: 4rem;
}

.mx-16{
  margin-left: 4rem;
  margin-right: 4rem;
}

.my-20{
  margin-top: 5rem;
  margin-bottom: 5rem;
}

.mx-20{
  margin-left: 5rem;
  margin-right: 5rem;
}

.my-24{
  margin-top: 6rem;
  margin-bottom: 6rem;
}

.mx-24{
  margin-left: 6rem;
  margin-right: 6rem;
}

.my-32{
  margin-top: 8rem;
  margin-bottom: 8rem;
}

.mx-32{
  margin-left: 8rem;
  margin-right: 8rem;
}

.my-40{
  margin-top: 10rem;
  margin-bottom: 10rem;
}

.mx-40{
  margin-left: 10rem;
  margin-right: 10rem;
}

.my-48{
  margin-top: 12rem;
  margin-bottom: 12rem;
}

.mx-48{
  margin-left: 12rem;
  margin-right: 12rem;
}

.my-56{
  margin-top: 14rem;
  margin-bottom: 14rem;
}

.mx-56{
  margin-left: 14rem;
  margin-right: 14rem;
}

.my-64{
  margin-top: 16rem;
  margin-bottom: 16rem;
}

.mx-64{
  margin-left: 16rem;
  margin-right: 16rem;
}

.my-72{
  margin-top: 18rem;
  margin-bottom: 18rem;
}

.mx-72{
  margin-left: 18rem;
  margin-right: 18rem;
}

.my-84{
  margin-top: 21rem;
  margin-bottom: 21rem;
}

.mx-84{
  margin-left: 21rem;
  margin-right: 21rem;
}

.my-96{
  margin-top: 24rem;
  margin-bottom: 24rem;
}

.mx-96{
  margin-left: 24rem;
  margin-right: 24rem;
}

.my-auto{
  margin-top: auto;
  margin-bottom: auto;
}

.mx-auto{
  margin-left: auto;
  margin-right: auto;
}

.my-px{
  margin-top: 1px;
  margin-bottom: 1px;
}

.mx-px{
  margin-left: 1px;
  margin-right: 1px;
}
.mt-0{
  margin-top: 0;
}

.mr-0{
  margin-right: 0;
}

.mb-0{
  margin-bottom: 0;
}

.ml-0{
  margin-left: 0;
}

.mt-1{
  margin-top: 0.25rem;
}

.mr-1{
  margin-right: 0.25rem;
}

.mb-1{
  margin-bottom: 0.25rem;
}

.ml-1{
  margin-left: 0.25rem;
}

.mt-2{
  margin-top: 0.5rem;
}

.mr-2{
  margin-right: 0.5rem;
}

.mb-2{
  margin-bottom: 0.5rem;
}

.ml-2{
  margin-left: 0.5rem;
}

.mt-3{
  margin-top: 0.75rem;
}

.mr-3{
  margin-right: 0.75rem;
}

.mb-3{
  margin-bottom: 0.75rem;
}

.ml-3{
  margin-left: 0.75rem;
}

.mt-4{
  margin-top: 1rem;
}

.mr-4{
  margin-right: 1rem;
}

.mb-4{
  margin-bottom: 1rem;
}

.ml-4{
  margin-left: 1rem;
}

.mt-5{
  margin-top: 1.25rem;
}

.mr-5{
  margin-right: 1.25rem;
}

.mb-5{
  margin-bottom: 1.25rem;
}

.ml-5{
  margin-left: 1.25rem;
}

.mt-6{
  margin-top: 1.5rem;
}

.mr-6{
  margin-right: 1.5rem;
}

.mb-6{
  margin-bottom: 1.5rem;
}

.ml-6{
  margin-left: 1.5rem;
}

.mt-8{
  margin-top: 2rem;
}

.mr-8{
  margin-right: 2rem;
}

.mb-8{
  margin-bottom: 2rem;
}

.ml-8{
  margin-left: 2rem;
}

.mt-10{
  margin-top: 2.5rem;
}

.mr-10{
  margin-right: 2.5rem;
}

.mb-10{
  margin-bottom: 2.5rem;
}

.ml-10{
  margin-left: 2.5rem;
}

.mt-12{
  margin-top: 3rem;
}

.mr-12{
  margin-right: 3rem;
}

.mb-12{
  margin-bottom: 3rem;
}

.ml-12{
  margin-left: 3rem;
}

.mt-16{
  margin-top: 4rem;
}

.mr-16{
  margin-right: 4rem;
}

.mb-16{
  margin-bottom: 4rem;
}

.ml-16{
  margin-left: 4rem;
}

.mt-20{
  margin-top: 5rem;
}

.mr-20{
  margin-right: 5rem;
}

.mb-20{
  margin-bottom: 5rem;
}

.ml-20{
  margin-left: 5rem;
}

.mt-24{
  margin-top: 6rem;
}

.mr-24{
  margin-right: 6rem;
}

.mb-24{
  margin-bottom: 6rem;
}

.ml-24{
  margin-left: 6rem;
}

.mt-32{
  margin-top: 8rem;
}

.mr-32{
  margin-right: 8rem;
}

.mb-32{
  margin-bottom: 8rem;
}

.ml-32{
  margin-left: 8rem;
}

.mt-40{
  margin-top: 10rem;
}

.mr-40{
  margin-right: 10rem;
}

.mb-40{
  margin-bottom: 10rem;
}

.ml-40{
  margin-left: 10rem;
}

.mt-48{
  margin-top: 12rem;
}

.mr-48{
  margin-right: 12rem;
}

.mb-48{
  margin-bottom: 12rem;
}

.ml-48{
  margin-left: 12rem;
}

.mt-56{
  margin-top: 14rem;
}

.mr-56{
  margin-right: 14rem;
}

.mb-56{
  margin-bottom: 14rem;
}

.ml-56{
  margin-left: 14rem;
}

.mt-64{
  margin-top: 16rem;
}

.mr-64{
  margin-right: 16rem;
}

.mb-64{
  margin-bottom: 16rem;
}

.ml-64{
  margin-left: 16rem;
}

.mt-72{
  margin-top: 18rem;
}

.mr-72{
  margin-right: 18rem;
}

.mb-72{
  margin-bottom: 18rem;
}

.ml-72{
  margin-left: 18rem;
}

.mt-84{
  margin-top: 21rem;
}

.mr-84{
  margin-right: 21rem;
}

.mb-84{
  margin-bottom: 21rem;
}

.ml-84{
  margin-left: 21rem;
}

.mt-96{
  margin-top: 24rem;
}

.mr-96{
  margin-right: 24rem;
}

.mb-96{
  margin-bottom: 24rem;
}

.ml-96{
  margin-left: 24rem;
}

.mt-auto{
  margin-top: auto;
}

.mr-auto{
  margin-right: auto;
}

.mb-auto{
  margin-bottom: auto;
}

.ml-auto{
  margin-left: auto;
}

.mt-px{
  margin-top: 1px;
}

.mr-px{
  margin-right: 1px;
}

.mb-px{
  margin-bottom: 1px;
}

.ml-px{
  margin-left: 1px;
}

.max-h-full{
  max-height: 100%;
}

.max-h-screen{
  max-height: 100vh;
}

.max-w-none{
  max-width: none;
}

.max-w-xs{
  max-width: 20rem;
}

.max-w-sm{
  max-width: 24rem;
}

.max-w-md{
  max-width: 28rem;
}

.max-w-lg{
  max-width: 32rem;
}

.max-w-xl{
  max-width: 36rem;
}

.max-w-2xl{
  max-width: 42rem;
}

.max-w-3xl{
  max-width: 48rem;
}

.max-w-4xl{
  max-width: 56rem;
}

.max-w-5xl{
  max-width: 64rem;
}

.max-w-6xl{
  max-width: 72rem;
}

.max-w-full{
  max-width: 100%;
}

.min-h-0{
  min-height: 0;
}

.min-h-full{
  min-height: 100%;
}

.min-h-screen{
  min-height: 100vh;
}

.min-w-0{
  min-width: 0;
}

.min-w-full{
  min-width: 100%;
}

.p-0{
  padding: 0;
}

.p-1{
  padding: 0.25rem;
}

.p-2{
  padding: 0.5rem;
}

.p-3{
  padding: 0.75rem;
}

.p-4{
  padding: 1rem;
}

.p-5{
  padding: 1.25rem;
}

.p-6{
  padding: 1.5rem;
}

.p-8{
  padding: 2rem;
}

.p-10{
  padding: 2.5rem;
}

.p-12{
  padding: 3rem;
}

.p-16{
  padding: 4rem;
}

.p-20{
  padding: 5rem;
}

.p-24{
  padding: 6rem;
}

.p-32{
  padding: 8rem;
}

.p-40{
  padding: 10rem;
}

.p-48{
  padding: 12rem;
}

.p-56{
  padding: 14rem;
}

.p-64{
  padding: 16rem;
}

.p-72{
  padding: 18rem;
}

.p-84{
  padding: 21rem;
}

.p-96{
  padding: 24rem;
}

.p-px{
  padding: 1px;
}

.py-0{
  padding-top: 0;
  padding-bottom: 0;
}

.px-0{
  padding-left: 0;
  padding-right: 0;
}

.py-1{
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.px-1{
  padding-left: 0.25rem;
  padding-right: 0.25rem;
}

.py-2{
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.px-2{
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.py-3{
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.px-3{
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.py-4{
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.px-4{
  padding-left: 1rem;
  padding-right: 1rem;
}

.py-5{
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}

.px-5{
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.py-6{
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.px-6{
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.py-8{
  padding-top: 2rem;
  padding-bottom: 2rem;
}

.px-8{
  padding-left: 2rem;
  padding-right: 2rem;
}

.py-10{
  padding-top: 2.5rem;
  padding-bottom: 2.5rem;
}

.px-10{
  padding-left: 2.5rem;
  padding-right: 2.5rem;
}

.py-12{
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.px-12{
  padding-left: 3rem;
  padding-right: 3rem;
}

.py-16{
  padding-top: 4rem;
  padding-bottom: 4rem;
}

.px-16{
  padding-left: 4rem;
  padding-right: 4rem;
}

.py-20{
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.px-20{
  padding-left: 5rem;
  padding-right: 5rem;
}

.py-24{
  padding-top: 6rem;
  padding-bottom: 6rem;
}

.px-24{
  padding-left: 6rem;
  padding-right: 6rem;
}

.py-32{
  padding-top: 8rem;
  padding-bottom: 8rem;
}

.px-32{
  padding-left: 8rem;
  padding-right: 8rem;
}

.py-40{
  padding-top: 10rem;
  padding-bottom: 10rem;
}

.px-40{
  padding-left: 10rem;
  padding-right: 10rem;
}

.py-48{
  padding-top: 12rem;
  padding-bottom: 12rem;
}

.px-48{
  padding-left: 12rem;
  padding-right: 12rem;
}

.py-56{
  padding-top: 14rem;
  padding-bottom: 14rem;
}

.px-56{
  padding-left: 14rem;
  padding-right: 14rem;
}

.py-64{
  padding-top: 16rem;
  padding-bottom: 16rem;
}

.px-64{
  padding-left: 16rem;
  padding-right: 16rem;
}

.py-72{
  padding-top: 18rem;
  padding-bottom: 18rem;
}

.px-72{
  padding-left: 18rem;
  padding-right: 18rem;
}

.py-84{
  padding-top: 21rem;
  padding-bottom: 21rem;
}

.px-84{
  padding-left: 21rem;
  padding-right: 21rem;
}

.py-96{
  padding-top: 24rem;
  padding-bottom: 24rem;
}

.px-96{
  padding-left: 24rem;
  padding-right: 24rem;
}

.py-px{
  padding-top: 1px;
  padding-bottom: 1px;
}

.px-px{
  padding-left: 1px;
  padding-right: 1px;
}

.pt-0{
  padding-top: 0;
}

.pr-0{
  padding-right: 0;
}

.pb-0{
  padding-bottom: 0;
}

.pl-0{
  padding-left: 0;
}

.pt-1{
  padding-top: 0.25rem;
}

.pr-1{
  padding-right: 0.25rem;
}

.pb-1{
  padding-bottom: 0.25rem;
}

.pl-1{
  padding-left: 0.25rem;
}

.pt-2{
  padding-top: 0.5rem;
}

.pr-2{
  padding-right: 0.5rem;
}

.pb-2{
  padding-bottom: 0.5rem;
}

.pl-2{
  padding-left: 0.5rem;
}

.pt-3{
  padding-top: 0.75rem;
}

.pr-3{
  padding-right: 0.75rem;
}

.pb-3{
  padding-bottom: 0.75rem;
}

.pl-3{
  padding-left: 0.75rem;
}

.pt-4{
  padding-top: 1rem;
}

.pr-4{
  padding-right: 1rem;
}

.pb-4{
  padding-bottom: 1rem;
}

.pl-4{
  padding-left: 1rem;
}

.pt-5{
  padding-top: 1.25rem;
}

.pr-5{
  padding-right: 1.25rem;
}

.pb-5{
  padding-bottom: 1.25rem;
}

.pl-5{
  padding-left: 1.25rem;
}

.pt-6{
  padding-top: 1.5rem;
}

.pr-6{
  padding-right: 1.5rem;
}

.pb-6{
  padding-bottom: 1.5rem;
}

.pl-6{
  padding-left: 1.5rem;
}

.pt-8{
  padding-top: 2rem;
}

.pr-8{
  padding-right: 2rem;
}

.pb-8{
  padding-bottom: 2rem;
}

.pl-8{
  padding-left: 2rem;
}

.pt-10{
  padding-top: 2.5rem;
}

.pr-10{
  padding-right: 2.5rem;
}

.pb-10{
  padding-bottom: 2.5rem;
}

.pl-10{
  padding-left: 2.5rem;
}

.pt-12{
  padding-top: 3rem;
}

.pr-12{
  padding-right: 3rem;
}

.pb-12{
  padding-bottom: 3rem;
}

.pl-12{
  padding-left: 3rem;
}

.pt-16{
  padding-top: 4rem;
}

.pr-16{
  padding-right: 4rem;
}

.pb-16{
  padding-bottom: 4rem;
}

.pl-16{
  padding-left: 4rem;
}

.pt-20{
  padding-top: 5rem;
}

.pr-20{
  padding-right: 5rem;
}

.pb-20{
  padding-bottom: 5rem;
}

.pl-20{
  padding-left: 5rem;
}

.pt-24{
  padding-top: 6rem;
}

.pr-24{
  padding-right: 6rem;
}

.pb-24{
  padding-bottom: 6rem;
}

.pl-24{
  padding-left: 6rem;
}

.pt-32{
  padding-top: 8rem;
}

.pr-32{
  padding-right: 8rem;
}

.pb-32{
  padding-bottom: 8rem;
}

.pl-32{
  padding-left: 8rem;
}

.pt-40{
  padding-top: 10rem;
}

.pr-40{
  padding-right: 10rem;
}

.pb-40{
  padding-bottom: 10rem;
}

.pl-40{
  padding-left: 10rem;
}

.pt-48{
  padding-top: 12rem;
}

.pr-48{
  padding-right: 12rem;
}

.pb-48{
  padding-bottom: 12rem;
}

.pl-48{
  padding-left: 12rem;
}

.pt-56{
  padding-top: 14rem;
}

.pr-56{
  padding-right: 14rem;
}

.pb-56{
  padding-bottom: 14rem;
}

.pl-56{
  padding-left: 14rem;
}

.pt-64{
  padding-top: 16rem;
}

.pr-64{
  padding-right: 16rem;
}

.pb-64{
  padding-bottom: 16rem;
}

.pl-64{
  padding-left: 16rem;
}

.pt-72{
  padding-top: 18rem;
}

.pr-72{
  padding-right: 18rem;
}

.pb-72{
  padding-bottom: 18rem;
}

.pl-72{
  padding-left: 18rem;
}

.pt-84{
  padding-top: 21rem;
}

.pr-84{
  padding-right: 21rem;
}

.pb-84{
  padding-bottom: 21rem;
}

.pl-84{
  padding-left: 21rem;
}

.pt-96{
  padding-top: 24rem;
}

.pr-96{
  padding-right: 24rem;
}

.pb-96{
  padding-bottom: 24rem;
}

.pl-96{
  padding-left: 24rem;
}

.pt-px{
  padding-top: 1px;
}

.pr-px{
  padding-right: 1px;
}

.pb-px{
  padding-bottom: 1px;
}

.pl-px{
  padding-left: 1px;
}
.static{
  position: static;
}

.fixed{
  position: fixed;
}

.absolute{
  position: absolute;
}

.relative{
  position: relative;
}

.sticky{
  position: -webkit-sticky;
  position: sticky;
}

.top-0{
  top: 0;
}

.right-0{
  right: 0;
}

.bottom-0{
  bottom: 0;
}

.left-0{
  left: 0;
}

.top-auto{
  top: auto;
}

.right-auto{
  right: auto;
}

.bottom-auto{
  bottom: auto;
}

.left-auto{
  left: auto;
}

.shadow{
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}
.hover\:shadow:hover{
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}

.text-left{
  text-align: left;
}

.text-center{
  text-align: center;
}

.text-right{
  text-align: right;
}

.text-justify{
  text-align: justify;
}

.text-transparent{
  color: transparent;
}

.text-current{
  color: currentColor;
}

.text-black{
  --text-opacity: 1;
  color: #000;
  color: rgba(0, 0, 0, var(--text-opacity));
}

.text-white{
  --text-opacity: 1;
  color: #fff;
  color: rgba(255, 255, 255, var(--text-opacity));
}

.text-gray-100{
  --text-opacity: 1;
  color: #f7fafc;
  color: rgba(247, 250, 252, var(--text-opacity));
}

.text-gray-200{
  --text-opacity: 1;
  color: #edf2f7;
  color: rgba(237, 242, 247, var(--text-opacity));
}

.text-gray-300{
  --text-opacity: 1;
  color: #e2e8f0;
  color: rgba(226, 232, 240, var(--text-opacity));
}

.text-gray-400{
  --text-opacity: 1;
  color: #cbd5e0;
  color: rgba(203, 213, 224, var(--text-opacity));
}

.text-gray-500{
  --text-opacity: 1;
  color: #a0aec0;
  color: rgba(160, 174, 192, var(--text-opacity));
}

.text-gray-600{
  --text-opacity: 1;
  color: #718096;
  color: rgba(113, 128, 150, var(--text-opacity));
}

.text-gray-700{
  --text-opacity: 1;
  color: #4a5568;
  color: rgba(74, 85, 104, var(--text-opacity));
}

.text-gray-800{
  --text-opacity: 1;
  color: #2d3748;
  color: rgba(45, 55, 72, var(--text-opacity));
}

.text-gray-900{
  --text-opacity: 1;
  color: #1a202c;
  color: rgba(26, 32, 44, var(--text-opacity));
}

.text-red-100{
  --text-opacity: 1;
  color: #fff5f5;
  color: rgba(255, 245, 245, var(--text-opacity));
}

.text-red-200{
  --text-opacity: 1;
  color: #fed7d7;
  color: rgba(254, 215, 215, var(--text-opacity));
}

.text-red-300{
  --text-opacity: 1;
  color: #feb2b2;
  color: rgba(254, 178, 178, var(--text-opacity));
}

.text-red-400{
  --text-opacity: 1;
  color: #fc8181;
  color: rgba(252, 129, 129, var(--text-opacity));
}

.text-red-500{
  --text-opacity: 1;
  color: #f56565;
  color: rgba(245, 101, 101, var(--text-opacity));
}

.text-red-600{
  --text-opacity: 1;
  color: #e53e3e;
  color: rgba(229, 62, 62, var(--text-opacity));
}

.text-red-700{
  --text-opacity: 1;
  color: #c53030;
  color: rgba(197, 48, 48, var(--text-opacity));
}

.text-red-800{
  --text-opacity: 1;
  color: #9b2c2c;
  color: rgba(155, 44, 44, var(--text-opacity));
}

.text-red-900{
  --text-opacity: 1;
  color: #742a2a;
  color: rgba(116, 42, 42, var(--text-opacity));
}

.text-orange-100{
  --text-opacity: 1;
  color: #fffaf0;
  color: rgba(255, 250, 240, var(--text-opacity));
}

.text-orange-200{
  --text-opacity: 1;
  color: #feebc8;
  color: rgba(254, 235, 200, var(--text-opacity));
}

.text-orange-300{
  --text-opacity: 1;
  color: #fbd38d;
  color: rgba(251, 211, 141, var(--text-opacity));
}

.text-orange-400{
  --text-opacity: 1;
  color: #f6ad55;
  color: rgba(246, 173, 85, var(--text-opacity));
}

.text-orange-500{
  --text-opacity: 1;
  color: #ed8936;
  color: rgba(237, 137, 54, var(--text-opacity));
}

.text-orange-600{
  --text-opacity: 1;
  color: #dd6b20;
  color: rgba(221, 107, 32, var(--text-opacity));
}

.text-orange-700{
  --text-opacity: 1;
  color: #c05621;
  color: rgba(192, 86, 33, var(--text-opacity));
}

.text-orange-800{
  --text-opacity: 1;
  color: #9c4221;
  color: rgba(156, 66, 33, var(--text-opacity));
}

.text-orange-900{
  --text-opacity: 1;
  color: #7b341e;
  color: rgba(123, 52, 30, var(--text-opacity));
}

.text-yellow-100{
  --text-opacity: 1;
  color: #fffff0;
  color: rgba(255, 255, 240, var(--text-opacity));
}

.text-yellow-200{
  --text-opacity: 1;
  color: #fefcbf;
  color: rgba(254, 252, 191, var(--text-opacity));
}

.text-yellow-300{
  --text-opacity: 1;
  color: #faf089;
  color: rgba(250, 240, 137, var(--text-opacity));
}

.text-yellow-400{
  --text-opacity: 1;
  color: #f6e05e;
  color: rgba(246, 224, 94, var(--text-opacity));
}

.text-yellow-500{
  --text-opacity: 1;
  color: #ecc94b;
  color: rgba(236, 201, 75, var(--text-opacity));
}

.text-yellow-600{
  --text-opacity: 1;
  color: #d69e2e;
  color: rgba(214, 158, 46, var(--text-opacity));
}

.text-yellow-700{
  --text-opacity: 1;
  color: #b7791f;
  color: rgba(183, 121, 31, var(--text-opacity));
}

.text-yellow-800{
  --text-opacity: 1;
  color: #975a16;
  color: rgba(151, 90, 22, var(--text-opacity));
}

.text-yellow-900{
  --text-opacity: 1;
  color: #744210;
  color: rgba(116, 66, 16, var(--text-opacity));
}

.text-green-100{
  --text-opacity: 1;
  color: #f0fff4;
  color: rgba(240, 255, 244, var(--text-opacity));
}

.text-green-200{
  --text-opacity: 1;
  color: #c6f6d5;
  color: rgba(198, 246, 213, var(--text-opacity));
}

.text-green-300{
  --text-opacity: 1;
  color: #9ae6b4;
  color: rgba(154, 230, 180, var(--text-opacity));
}

.text-green-400{
  --text-opacity: 1;
  color: #68d391;
  color: rgba(104, 211, 145, var(--text-opacity));
}

.text-green-500{
  --text-opacity: 1;
  color: #48bb78;
  color: rgba(72, 187, 120, var(--text-opacity));
}

.text-green-600{
  --text-opacity: 1;
  color: #38a169;
  color: rgba(56, 161, 105, var(--text-opacity));
}

.text-green-700{
  --text-opacity: 1;
  color: #2f855a;
  color: rgba(47, 133, 90, var(--text-opacity));
}

.text-green-800{
  --text-opacity: 1;
  color: #276749;
  color: rgba(39, 103, 73, var(--text-opacity));
}

.text-green-900{
  --text-opacity: 1;
  color: #22543d;
  color: rgba(34, 84, 61, var(--text-opacity));
}

.text-teal-100{
  --text-opacity: 1;
  color: #e6fffa;
  color: rgba(230, 255, 250, var(--text-opacity));
}

.text-teal-200{
  --text-opacity: 1;
  color: #b2f5ea;
  color: rgba(178, 245, 234, var(--text-opacity));
}

.text-teal-300{
  --text-opacity: 1;
  color: #81e6d9;
  color: rgba(129, 230, 217, var(--text-opacity));
}

.text-teal-400{
  --text-opacity: 1;
  color: #4fd1c5;
  color: rgba(79, 209, 197, var(--text-opacity));
}

.text-teal-500{
  --text-opacity: 1;
  color: #38b2ac;
  color: rgba(56, 178, 172, var(--text-opacity));
}

.text-teal-600{
  --text-opacity: 1;
  color: #319795;
  color: rgba(49, 151, 149, var(--text-opacity));
}

.text-teal-700{
  --text-opacity: 1;
  color: #2c7a7b;
  color: rgba(44, 122, 123, var(--text-opacity));
}

.text-teal-800{
  --text-opacity: 1;
  color: #285e61;
  color: rgba(40, 94, 97, var(--text-opacity));
}

.text-teal-900{
  --text-opacity: 1;
  color: #234e52;
  color: rgba(35, 78, 82, var(--text-opacity));
}

.text-blue-100{
  --text-opacity: 1;
  color: #ebf8ff;
  color: rgba(235, 248, 255, var(--text-opacity));
}

.text-blue-200{
  --text-opacity: 1;
  color: #bee3f8;
  color: rgba(190, 227, 248, var(--text-opacity));
}

.text-blue-300{
  --text-opacity: 1;
  color: #90cdf4;
  color: rgba(144, 205, 244, var(--text-opacity));
}

.text-blue-400{
  --text-opacity: 1;
  color: #63b3ed;
  color: rgba(99, 179, 237, var(--text-opacity));
}

.text-blue-500{
  --text-opacity: 1;
  color: #4299e1;
  color: rgba(66, 153, 225, var(--text-opacity));
}

.text-blue-600{
  --text-opacity: 1;
  color: #3182ce;
  color: rgba(49, 130, 206, var(--text-opacity));
}

.text-blue-700{
  --text-opacity: 1;
  color: #2b6cb0;
  color: rgba(43, 108, 176, var(--text-opacity));
}

.text-blue-800{
  --text-opacity: 1;
  color: #2c5282;
  color: rgba(44, 82, 130, var(--text-opacity));
}

.text-blue-900{
  --text-opacity: 1;
  color: #2a4365;
  color: rgba(42, 67, 101, var(--text-opacity));
}

.text-indigo-100{
  --text-opacity: 1;
  color: #ebf4ff;
  color: rgba(235, 244, 255, var(--text-opacity));
}

.text-indigo-200{
  --text-opacity: 1;
  color: #c3dafe;
  color: rgba(195, 218, 254, var(--text-opacity));
}

.text-indigo-300{
  --text-opacity: 1;
  color: #a3bffa;
  color: rgba(163, 191, 250, var(--text-opacity));
}

.text-indigo-400{
  --text-opacity: 1;
  color: #7f9cf5;
  color: rgba(127, 156, 245, var(--text-opacity));
}

.text-indigo-500{
  --text-opacity: 1;
  color: #667eea;
  color: rgba(102, 126, 234, var(--text-opacity));
}

.text-indigo-600{
  --text-opacity: 1;
  color: #5a67d8;
  color: rgba(90, 103, 216, var(--text-opacity));
}

.text-indigo-700{
  --text-opacity: 1;
  color: #4c51bf;
  color: rgba(76, 81, 191, var(--text-opacity));
}

.text-indigo-800{
  --text-opacity: 1;
  color: #434190;
  color: rgba(67, 65, 144, var(--text-opacity));
}

.text-indigo-900{
  --text-opacity: 1;
  color: #3c366b;
  color: rgba(60, 54, 107, var(--text-opacity));
}

.text-purple-100{
  --text-opacity: 1;
  color: #faf5ff;
  color: rgba(250, 245, 255, var(--text-opacity));
}

.text-purple-200{
  --text-opacity: 1;
  color: #e9d8fd;
  color: rgba(233, 216, 253, var(--text-opacity));
}

.text-purple-300{
  --text-opacity: 1;
  color: #d6bcfa;
  color: rgba(214, 188, 250, var(--text-opacity));
}

.text-purple-400{
  --text-opacity: 1;
  color: #b794f4;
  color: rgba(183, 148, 244, var(--text-opacity));
}

.text-purple-500{
  --text-opacity: 1;
  color: #9f7aea;
  color: rgba(159, 122, 234, var(--text-opacity));
}

.text-purple-600{
  --text-opacity: 1;
  color: #805ad5;
  color: rgba(128, 90, 213, var(--text-opacity));
}

.text-purple-700{
  --text-opacity: 1;
  color: #6b46c1;
  color: rgba(107, 70, 193, var(--text-opacity));
}

.text-purple-800{
  --text-opacity: 1;
  color: #553c9a;
  color: rgba(85, 60, 154, var(--text-opacity));
}

.text-purple-900{
  --text-opacity: 1;
  color: #44337a;
  color: rgba(68, 51, 122, var(--text-opacity));
}

.text-pink-100{
  --text-opacity: 1;
  color: #fff5f7;
  color: rgba(255, 245, 247, var(--text-opacity));
}

.text-pink-200{
  --text-opacity: 1;
  color: #fed7e2;
  color: rgba(254, 215, 226, var(--text-opacity));
}

.text-pink-300{
  --text-opacity: 1;
  color: #fbb6ce;
  color: rgba(251, 182, 206, var(--text-opacity));
}

.text-pink-400{
  --text-opacity: 1;
  color: #f687b3;
  color: rgba(246, 135, 179, var(--text-opacity));
}

.text-pink-500{
  --text-opacity: 1;
  color: #ed64a6;
  color: rgba(237, 100, 166, var(--text-opacity));
}

.text-pink-600{
  --text-opacity: 1;
  color: #d53f8c;
  color: rgba(213, 63, 140, var(--text-opacity));
}

.text-pink-700{
  --text-opacity: 1;
  color: #b83280;
  color: rgba(184, 50, 128, var(--text-opacity));
}

.text-pink-800{
  --text-opacity: 1;
  color: #97266d;
  color: rgba(151, 38, 109, var(--text-opacity));
}

.text-pink-900{
  --text-opacity: 1;
  color: #702459;
  color: rgba(112, 36, 89, var(--text-opacity));
}


.visible{
  visibility: visible;
}

.invisible{
  visibility: hidden;
}

.whitespace-normal{
  white-space: normal;
}

.whitespace-no-wrap{
  white-space: nowrap;
}

.whitespace-pre{
  white-space: pre;
}

.whitespace-pre-line{
  white-space: pre-line;
}

.whitespace-pre-wrap{
  white-space: pre-wrap;
}

.break-normal{
  overflow-wrap: normal;
  word-break: normal;
}

.break-words{
  overflow-wrap: break-word;
}

.break-all{
  word-break: break-all;
}

.truncate{
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.w-0{
  width: 0;
}

.w-1{
  width: 0.25rem;
}

.w-2{
  width: 0.5rem;
}

.w-3{
  width: 0.75rem;
}

.w-4{
  width: 1rem;
}

.w-5{
  width: 1.25rem;
}

.w-6{
  width: 1.5rem;
}

.w-8{
  width: 2rem;
}

.w-10{
  width: 2.5rem;
}

.w-12{
  width: 3rem;
}

.w-16{
  width: 4rem;
}

.w-20{
  width: 5rem;
}

.w-24{
  width: 6rem;
}

.w-32{
  width: 8rem;
}

.w-40{
  width: 10rem;
}

.w-48{
  width: 12rem;
}

.w-56{
  width: 14rem;
}

.w-64{
  width: 16rem;
}

.w-72{
  width: 18rem;
}

.w-84{
  width: 21rem;
}

.w-96{
  width: 24rem;
}

.w-auto{
  width: auto;
}

.w-px{
  width: 1px;
}

.w-1\/2{
  width: 50%;
}

.w-1\/3{
  width: 33.333333%;
}

.w-2\/3{
  width: 66.666667%;
}

.w-1\/4{
  width: 25%;
}

.w-2\/4{
  width: 50%;
}

.w-3\/4{
  width: 75%;
}

.w-1\/5{
  width: 20%;
}

.w-2\/5{
  width: 40%;
}

.w-3\/5{
  width: 60%;
}

.w-4\/5{
  width: 80%;
}

.w-1\/6{
  width: 16.666667%;
}

.w-2\/6{
  width: 33.333333%;
}

.w-3\/6{
  width: 50%;
}

.w-4\/6{
  width: 66.666667%;
}

.w-5\/6{
  width: 83.333333%;
}

.w-1\/12{
  width: 8.333333%;
}

.w-2\/12{
  width: 16.666667%;
}

.w-3\/12{
  width: 25%;
}

.w-4\/12{
  width: 33.333333%;
}

.w-5\/12{
  width: 41.666667%;
}

.w-6\/12{
  width: 50%;
}

.w-7\/12{
  width: 58.333333%;
}

.w-8\/12{
  width: 66.666667%;
}

.w-9\/12{
  width: 75%;
}

.w-10\/12{
  width: 83.333333%;
}

.w-11\/12{
  width: 91.666667%;
}

.w-full{
  width: 100%;
}

.w-screen{
  width: 100vw;
}

.z-0{
  z-index: 0;
}

.z-10{
  z-index: 10;
}

.z-20{
  z-index: 20;
}

.z-30{
  z-index: 30;
}

.z-40{
  z-index: 40;
}

.z-50{
  z-index: 50;
}

.z-auto{
  z-index: auto;
}

.gap-0{
  grid-gap: 0;
  gap: 0;
}

.gap-1{
  grid-gap: 0.25rem;
  gap: 0.25rem;
}

.gap-2{
  grid-gap: 0.5rem;
  gap: 0.5rem;
}

.gap-3{
  grid-gap: 0.75rem;
  gap: 0.75rem;
}

.gap-4{
  grid-gap: 1rem;
  gap: 1rem;
}

.gap-5{
  grid-gap: 1.25rem;
  gap: 1.25rem;
}

.gap-6{
  grid-gap: 1.5rem;
  gap: 1.5rem;
}

.gap-8{
  grid-gap: 2rem;
  gap: 2rem;
}

.gap-10{
  grid-gap: 2.5rem;
  gap: 2.5rem;
}

.gap-12{
  grid-gap: 3rem;
  gap: 3rem;
}

.gap-16{
  grid-gap: 4rem;
  gap: 4rem;
}

.gap-20{
  grid-gap: 5rem;
  gap: 5rem;
}

.gap-24{
  grid-gap: 6rem;
  gap: 6rem;
}

.gap-32{
  grid-gap: 8rem;
  gap: 8rem;
}

.gap-40{
  grid-gap: 10rem;
  gap: 10rem;
}

.gap-48{
  grid-gap: 12rem;
  gap: 12rem;
}

.gap-56{
  grid-gap: 14rem;
  gap: 14rem;
}

.gap-64{
  grid-gap: 16rem;
  gap: 16rem;
}

.gap-72{
  grid-gap: 18rem;
  gap: 18rem;
}

.gap-84{
  grid-gap: 21rem;
  gap: 21rem;
}

.gap-96{
  grid-gap: 24rem;
  gap: 24rem;
}

.gap-px{
  grid-gap: 1px;
  gap: 1px;
}

.grid-cols-1{
  grid-template-columns: repeat(1, minmax(0, 1fr));
}

.grid-cols-2{
  grid-template-columns: repeat(2, minmax(0, 1fr));
}

.grid-cols-3{
  grid-template-columns: repeat(3, minmax(0, 1fr));
}

.grid-cols-4{
  grid-template-columns: repeat(4, minmax(0, 1fr));
}

.grid-cols-5{
  grid-template-columns: repeat(5, minmax(0, 1fr));
}

.grid-cols-6{
  grid-template-columns: repeat(6, minmax(0, 1fr));
}

.grid-cols-7{
  grid-template-columns: repeat(7, minmax(0, 1fr));
}

.grid-cols-8{
  grid-template-columns: repeat(8, minmax(0, 1fr));
}

.grid-cols-9{
  grid-template-columns: repeat(9, minmax(0, 1fr));
}

.grid-cols-10{
  grid-template-columns: repeat(10, minmax(0, 1fr));
}

.grid-cols-11{
  grid-template-columns: repeat(11, minmax(0, 1fr));
}

.grid-cols-12{
  grid-template-columns: repeat(12, minmax(0, 1fr));
}

.grid-cols-none{
  grid-template-columns: none;
}

.col-auto{
  grid-column: auto;
}

.col-span-1{
  grid-column: span 1 / span 1;
}

.col-span-2{
  grid-column: span 2 / span 2;
}

.col-span-3{
  grid-column: span 3 / span 3;
}

.col-span-4{
  grid-column: span 4 / span 4;
}

.col-span-5{
  grid-column: span 5 / span 5;
}

.col-span-6{
  grid-column: span 6 / span 6;
}

.col-span-7{
  grid-column: span 7 / span 7;
}

.col-span-8{
  grid-column: span 8 / span 8;
}

.col-span-9{
  grid-column: span 9 / span 9;
}

.col-span-10{
  grid-column: span 10 / span 10;
}

.col-span-11{
  grid-column: span 11 / span 11;
}

.col-span-12{
  grid-column: span 12 / span 12;
}


@media (max-width: 767px){
  .md\:block{
    display: block;
  }

  .md\:inline-block{
    display: inline-block;
  }

  .md\:inline{
    display: inline;
  }

  .md\:flex{
    display: flex;
  }

  .md\:inline-flex{
    display: inline-flex;
  }

  .md\:table{
    display: table;
  }

  .md\:table-caption{
    display: table-caption;
  }

  .md\:table-cell{
    display: table-cell;
  }

  .md\:table-column{
    display: table-column;
  }

  .md\:table-column-group{
    display: table-column-group;
  }

  .md\:table-footer-group{
    display: table-footer-group;
  }

  .md\:table-header-group{
    display: table-header-group;
  }

  .md\:table-row-group{
    display: table-row-group;
  }

  .md\:table-row{
    display: table-row;
  }

  .md\:flow-root{
    display: flow-root;
  }

  .md\:grid{
    display: grid;
  }

  .md\:inline-grid{
    display: inline-grid;
  }

  .md\:hidden{
    display: none;
  }

  .md\:flex-row{
    flex-direction: row;
  }

  .md\:flex-row-reverse{
    flex-direction: row-reverse;
  }

  .md\:flex-col{
    flex-direction: column;
  }

  .md\:flex-col-reverse{
    flex-direction: column-reverse;
  }

  .md\:flex-wrap{
    flex-wrap: wrap;
  }

  .md\:flex-wrap-reverse{
    flex-wrap: wrap-reverse;
  }

  .md\:flex-no-wrap{
    flex-wrap: nowrap;
  }

  .md\:items-start{
    align-items: flex-start;
  }

  .md\:items-end{
    align-items: flex-end;
  }

  .md\:items-center{
    align-items: center;
  }

  .md\:items-baseline{
    align-items: baseline;
  }

  .md\:items-stretch{
    align-items: stretch;
  }

  .md\:self-auto{
    align-self: auto;
  }

  .md\:self-start{
    align-self: flex-start;
  }

  .md\:self-end{
    align-self: flex-end;
  }

  .md\:self-center{
    align-self: center;
  }

  .md\:self-stretch{
    align-self: stretch;
  }

  .md\:justify-start{
    justify-content: flex-start;
  }

  .md\:justify-end{
    justify-content: flex-end;
  }

  .md\:justify-center{
    justify-content: center;
  }

  .md\:justify-between{
    justify-content: space-between;
  }

  .md\:justify-around{
    justify-content: space-around;
  }

  .md\:justify-evenly{
    justify-content: space-evenly;
  }

  .md\:content-center{
    align-content: center;
  }

  .md\:content-start{
    align-content: flex-start;
  }

  .md\:content-end{
    align-content: flex-end;
  }

  .md\:content-between{
    align-content: space-between;
  }

  .md\:content-around{
    align-content: space-around;
  }

  .md\:flex-1{
    flex: 1 1 0%;
  }

  .md\:flex-auto{
    flex: 1 1 auto;
  }

  .md\:flex-initial{
    flex: 0 1 auto;
  }

  .md\:flex-none{
    flex: none;
  }

  .md\:flex-grow-0{
    flex-grow: 0;
  }

  .md\:flex-grow{
    flex-grow: 1;
  }

  .md\:flex-shrink-0{
    flex-shrink: 0;
  }

  .md\:flex-shrink{
    flex-shrink: 1;
  }

  .md\:order-1{
    order: 1;
  }

  .md\:order-2{
    order: 2;
  }

  .md\:order-3{
    order: 3;
  }

  .md\:order-4{
    order: 4;
  }

  .md\:order-5{
    order: 5;
  }

  .md\:order-6{
    order: 6;
  }

  .md\:order-7{
    order: 7;
  }

  .md\:order-8{
    order: 8;
  }

  .md\:order-9{
    order: 9;
  }

  .md\:order-10{
    order: 10;
  }

  .md\:order-11{
    order: 11;
  }

  .md\:order-12{
    order: 12;
  }

  .md\:order-first{
    order: -9999;
  }

  .md\:order-last{
    order: 9999;
  }

  .md\:order-none{
    order: 0;
  }

  .md\:float-right{
    float: right;
  }

  .md\:float-left{
    float: left;
  }

  .md\:float-none{
    float: none;
  }

  .md\:clearfix:after{
    content: "";
    display: table;
    clear: both;
  }

  .md\:clear-left{
    clear: left;
  }

  .md\:clear-right{
    clear: right;
  }

  .md\:clear-both{
    clear: both;
  }

  .md\:clear-none{
    clear: none;
  }

  .md\:font-sans{
    font-family: Ubuntu, Sans-serif;
  }

  .md\:font-hairline{
    font-weight: 100;
  }

  .md\:font-thin{
    font-weight: 200;
  }

  .md\:font-light{
    font-weight: 300;
  }

  .md\:font-normal{
    font-weight: 400;
  }

  .md\:font-medium{
    font-weight: 500;
  }

  .md\:font-semibold{
    font-weight: 600;
  }

  .md\:font-bold{
    font-weight: 700;
  }

  .md\:font-extrabold{
    font-weight: 800;
  }

  .md\:font-black{
    font-weight: 900;
  }

  .md\:hover\:font-hairline:hover{
    font-weight: 100;
  }

  .md\:hover\:font-thin:hover{
    font-weight: 200;
  }

  .md\:hover\:font-light:hover{
    font-weight: 300;
  }

  .md\:hover\:font-normal:hover{
    font-weight: 400;
  }

  .md\:hover\:font-medium:hover{
    font-weight: 500;
  }

  .md\:hover\:font-semibold:hover{
    font-weight: 600;
  }

  .md\:hover\:font-bold:hover{
    font-weight: 700;
  }

  .md\:hover\:font-extrabold:hover{
    font-weight: 800;
  }

  .md\:hover\:font-black:hover{
    font-weight: 900;
  }

  .md\:focus\:font-hairline:focus{
    font-weight: 100;
  }

  .md\:focus\:font-thin:focus{
    font-weight: 200;
  }

  .md\:focus\:font-light:focus{
    font-weight: 300;
  }

  .md\:focus\:font-normal:focus{
    font-weight: 400;
  }

  .md\:focus\:font-medium:focus{
    font-weight: 500;
  }

  .md\:focus\:font-semibold:focus{
    font-weight: 600;
  }

  .md\:focus\:font-bold:focus{
    font-weight: 700;
  }

  .md\:focus\:font-extrabold:focus{
    font-weight: 800;
  }

  .md\:focus\:font-black:focus{
    font-weight: 900;
  }

  .md\:h-0{
    height: 0;
  }

  .md\:h-1{
    height: 0.25rem;
  }

  .md\:h-2{
    height: 0.5rem;
  }

  .md\:h-3{
    height: 0.75rem;
  }

  .md\:h-4{
    height: 1rem;
  }

  .md\:h-5{
    height: 1.25rem;
  }

  .md\:h-6{
    height: 1.5rem;
  }

  .md\:h-8{
    height: 2rem;
  }

  .md\:h-10{
    height: 2.5rem;
  }

  .md\:h-12{
    height: 3rem;
  }

  .md\:h-16{
    height: 4rem;
  }

  .md\:h-20{
    height: 5rem;
  }

  .md\:h-24{
    height: 6rem;
  }

  .md\:h-32{
    height: 8rem;
  }

  .md\:h-40{
    height: 10rem;
  }

  .md\:h-48{
    height: 12rem;
  }

  .md\:h-56{
    height: 14rem;
  }

  .md\:h-64{
    height: 16rem;
  }

  .md\:h-72{
    height: 18rem;
  }

  .md\:h-84{
    height: 21rem;
  }

  .md\:h-96{
    height: 24rem;
  }

  .md\:h-auto{
    height: auto;
  }

  .md\:h-px{
    height: 1px;
  }

  .md\:h-full{
    height: 100%;
  }

  .md\:h-screen{
    height: 100vh;
  }

  .md\:text-xs{
    font-size: 0.75rem;
  }

  .md\:text-sm{
    font-size: 0.875rem;
  }

  .md\:text-base{
    font-size: 1rem;
  }

  .md\:text-lg{
    font-size: 1.125rem;
  }

  .md\:text-xl{
    font-size: 1.25rem;
  }

  .md\:text-2xl{
    font-size: 1.5rem;
  }

  .md\:text-3xl{
    font-size: 1.875rem;
  }

  .md\:text-4xl{
    font-size: 2.25rem;
  }

  .md\:text-5xl{
    font-size: 3rem;
  }

  .md\:text-6xl{
    font-size: 4rem;
  }

  .md\:leading-3{
    line-height: .75rem;
  }

  .md\:leading-4{
    line-height: 1rem;
  }

  .md\:leading-5{
    line-height: 1.25rem;
  }

  .md\:leading-6{
    line-height: 1.5rem;
  }

  .md\:leading-7{
    line-height: 1.75rem;
  }

  .md\:leading-8{
    line-height: 2rem;
  }

  .md\:leading-9{
    line-height: 2.25rem;
  }

  .md\:leading-10{
    line-height: 2.5rem;
  }

  .md\:leading-none{
    line-height: 1;
  }

  .md\:leading-tight{
    line-height: 1.25;
  }

  .md\:leading-snug{
    line-height: 1.375;
  }

  .md\:leading-normal{
    line-height: 1.5;
  }

  .md\:leading-relaxed{
    line-height: 1.625;
  }

  .md\:leading-loose{
    line-height: 2;
  }

  .md\:list-inside{
    list-style-position: inside;
  }

  .md\:list-outside{
    list-style-position: outside;
  }

  .md\:list-none{
    list-style-type: none;
  }

  .md\:list-disc{
    list-style-type: disc;
  }

  .md\:list-decimal{
    list-style-type: decimal;
  }

  .md\:m-0{
    margin: 0;
  }

  .md\:m-1{
    margin: 0.25rem;
  }

  .md\:m-2{
    margin: 0.5rem;
  }

  .md\:m-3{
    margin: 0.75rem;
  }

  .md\:m-4{
    margin: 1rem;
  }

  .md\:m-5{
    margin: 1.25rem;
  }

  .md\:m-6{
    margin: 1.5rem;
  }

  .md\:m-8{
    margin: 2rem;
  }

  .md\:m-10{
    margin: 2.5rem;
  }

  .md\:m-12{
    margin: 3rem;
  }

  .md\:m-16{
    margin: 4rem;
  }

  .md\:m-20{
    margin: 5rem;
  }

  .md\:m-24{
    margin: 6rem;
  }

  .md\:m-32{
    margin: 8rem;
  }

  .md\:m-40{
    margin: 10rem;
  }

  .md\:m-48{
    margin: 12rem;
  }

  .md\:m-56{
    margin: 14rem;
  }

  .md\:m-64{
    margin: 16rem;
  }

  .md\:m-72{
    margin: 18rem;
  }

  .md\:m-84{
    margin: 21rem;
  }

  .md\:m-96{
    margin: 24rem;
  }

  .md\:m-auto{
    margin: auto;
  }

  .md\:m-px{
    margin: 1px;
  }

  .md\:-m-1{
    margin: -0.25rem;
  }

  .md\:-m-2{
    margin: -0.5rem;
  }

  .md\:-m-3{
    margin: -0.75rem;
  }

  .md\:-m-4{
    margin: -1rem;
  }

  .md\:-m-5{
    margin: -1.25rem;
  }

  .md\:-m-6{
    margin: -1.5rem;
  }

  .md\:-m-8{
    margin: -2rem;
  }

  .md\:-m-10{
    margin: -2.5rem;
  }

  .md\:-m-12{
    margin: -3rem;
  }

  .md\:-m-16{
    margin: -4rem;
  }

  .md\:-m-20{
    margin: -5rem;
  }

  .md\:-m-24{
    margin: -6rem;
  }

  .md\:-m-32{
    margin: -8rem;
  }

  .md\:-m-40{
    margin: -10rem;
  }

  .md\:-m-48{
    margin: -12rem;
  }

  .md\:-m-56{
    margin: -14rem;
  }

  .md\:-m-64{
    margin: -16rem;
  }

  .md\:-m-72{
    margin: -18rem;
  }

  .md\:-m-84{
    margin: -21rem;
  }

  .md\:-m-96{
    margin: -24rem;
  }

  .md\:-m-px{
    margin: -1px;
  }

  .md\:my-0{
    margin-top: 0;
    margin-bottom: 0;
  }

  .md\:mx-0{
    margin-left: 0;
    margin-right: 0;
  }

  .md\:my-1{
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
  }

  .md\:mx-1{
    margin-left: 0.25rem;
    margin-right: 0.25rem;
  }

  .md\:my-2{
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .md\:mx-2{
    margin-left: 0.5rem;
    margin-right: 0.5rem;
  }

  .md\:my-3{
    margin-top: 0.75rem;
    margin-bottom: 0.75rem;
  }

  .md\:mx-3{
    margin-left: 0.75rem;
    margin-right: 0.75rem;
  }

  .md\:my-4{
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .md\:mx-4{
    margin-left: 1rem;
    margin-right: 1rem;
  }

  .md\:my-5{
    margin-top: 1.25rem;
    margin-bottom: 1.25rem;
  }

  .md\:mx-5{
    margin-left: 1.25rem;
    margin-right: 1.25rem;
  }

  .md\:my-6{
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .md\:mx-6{
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }

  .md\:my-8{
    margin-top: 2rem;
    margin-bottom: 2rem;
  }

  .md\:mx-8{
    margin-left: 2rem;
    margin-right: 2rem;
  }

  .md\:my-10{
    margin-top: 2.5rem;
    margin-bottom: 2.5rem;
  }

  .md\:mx-10{
    margin-left: 2.5rem;
    margin-right: 2.5rem;
  }

  .md\:my-12{
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .md\:mx-12{
    margin-left: 3rem;
    margin-right: 3rem;
  }

  .md\:my-16{
    margin-top: 4rem;
    margin-bottom: 4rem;
  }

  .md\:mx-16{
    margin-left: 4rem;
    margin-right: 4rem;
  }

  .md\:my-20{
    margin-top: 5rem;
    margin-bottom: 5rem;
  }

  .md\:mx-20{
    margin-left: 5rem;
    margin-right: 5rem;
  }

  .md\:my-24{
    margin-top: 6rem;
    margin-bottom: 6rem;
  }

  .md\:mx-24{
    margin-left: 6rem;
    margin-right: 6rem;
  }

  .md\:my-32{
    margin-top: 8rem;
    margin-bottom: 8rem;
  }

  .md\:mx-32{
    margin-left: 8rem;
    margin-right: 8rem;
  }

  .md\:my-40{
    margin-top: 10rem;
    margin-bottom: 10rem;
  }

  .md\:mx-40{
    margin-left: 10rem;
    margin-right: 10rem;
  }

  .md\:my-48{
    margin-top: 12rem;
    margin-bottom: 12rem;
  }

  .md\:mx-48{
    margin-left: 12rem;
    margin-right: 12rem;
  }

  .md\:my-56{
    margin-top: 14rem;
    margin-bottom: 14rem;
  }

  .md\:mx-56{
    margin-left: 14rem;
    margin-right: 14rem;
  }

  .md\:my-64{
    margin-top: 16rem;
    margin-bottom: 16rem;
  }

  .md\:mx-64{
    margin-left: 16rem;
    margin-right: 16rem;
  }

  .md\:my-72{
    margin-top: 18rem;
    margin-bottom: 18rem;
  }

  .md\:mx-72{
    margin-left: 18rem;
    margin-right: 18rem;
  }

  .md\:my-84{
    margin-top: 21rem;
    margin-bottom: 21rem;
  }

  .md\:mx-84{
    margin-left: 21rem;
    margin-right: 21rem;
  }

  .md\:my-96{
    margin-top: 24rem;
    margin-bottom: 24rem;
  }

  .md\:mx-96{
    margin-left: 24rem;
    margin-right: 24rem;
  }

  .md\:my-auto{
    margin-top: auto;
    margin-bottom: auto;
  }

  .md\:mx-auto{
    margin-left: auto;
    margin-right: auto;
  }

  .md\:my-px{
    margin-top: 1px;
    margin-bottom: 1px;
  }

  .md\:mx-px{
    margin-left: 1px;
    margin-right: 1px;
  }

  .md\:-my-1{
    margin-top: -0.25rem;
    margin-bottom: -0.25rem;
  }

  .md\:-mx-1{
    margin-left: -0.25rem;
    margin-right: -0.25rem;
  }

  .md\:-my-2{
    margin-top: -0.5rem;
    margin-bottom: -0.5rem;
  }

  .md\:-mx-2{
    margin-left: -0.5rem;
    margin-right: -0.5rem;
  }

  .md\:-my-3{
    margin-top: -0.75rem;
    margin-bottom: -0.75rem;
  }

  .md\:-mx-3{
    margin-left: -0.75rem;
    margin-right: -0.75rem;
  }

  .md\:-my-4{
    margin-top: -1rem;
    margin-bottom: -1rem;
  }

  .md\:-mx-4{
    margin-left: -1rem;
    margin-right: -1rem;
  }

  .md\:-my-5{
    margin-top: -1.25rem;
    margin-bottom: -1.25rem;
  }

  .md\:-mx-5{
    margin-left: -1.25rem;
    margin-right: -1.25rem;
  }

  .md\:-my-6{
    margin-top: -1.5rem;
    margin-bottom: -1.5rem;
  }

  .md\:-mx-6{
    margin-left: -1.5rem;
    margin-right: -1.5rem;
  }

  .md\:-my-8{
    margin-top: -2rem;
    margin-bottom: -2rem;
  }

  .md\:-mx-8{
    margin-left: -2rem;
    margin-right: -2rem;
  }

  .md\:-my-10{
    margin-top: -2.5rem;
    margin-bottom: -2.5rem;
  }

  .md\:-mx-10{
    margin-left: -2.5rem;
    margin-right: -2.5rem;
  }

  .md\:-my-12{
    margin-top: -3rem;
    margin-bottom: -3rem;
  }

  .md\:-mx-12{
    margin-left: -3rem;
    margin-right: -3rem;
  }

  .md\:-my-16{
    margin-top: -4rem;
    margin-bottom: -4rem;
  }

  .md\:-mx-16{
    margin-left: -4rem;
    margin-right: -4rem;
  }

  .md\:-my-20{
    margin-top: -5rem;
    margin-bottom: -5rem;
  }

  .md\:-mx-20{
    margin-left: -5rem;
    margin-right: -5rem;
  }

  .md\:-my-24{
    margin-top: -6rem;
    margin-bottom: -6rem;
  }

  .md\:-mx-24{
    margin-left: -6rem;
    margin-right: -6rem;
  }

  .md\:-my-32{
    margin-top: -8rem;
    margin-bottom: -8rem;
  }

  .md\:-mx-32{
    margin-left: -8rem;
    margin-right: -8rem;
  }

  .md\:-my-40{
    margin-top: -10rem;
    margin-bottom: -10rem;
  }

  .md\:-mx-40{
    margin-left: -10rem;
    margin-right: -10rem;
  }

  .md\:-my-48{
    margin-top: -12rem;
    margin-bottom: -12rem;
  }

  .md\:-mx-48{
    margin-left: -12rem;
    margin-right: -12rem;
  }

  .md\:-my-56{
    margin-top: -14rem;
    margin-bottom: -14rem;
  }

  .md\:-mx-56{
    margin-left: -14rem;
    margin-right: -14rem;
  }

  .md\:-my-64{
    margin-top: -16rem;
    margin-bottom: -16rem;
  }

  .md\:-mx-64{
    margin-left: -16rem;
    margin-right: -16rem;
  }

  .md\:-my-72{
    margin-top: -18rem;
    margin-bottom: -18rem;
  }

  .md\:-mx-72{
    margin-left: -18rem;
    margin-right: -18rem;
  }

  .md\:-my-84{
    margin-top: -21rem;
    margin-bottom: -21rem;
  }

  .md\:-mx-84{
    margin-left: -21rem;
    margin-right: -21rem;
  }

  .md\:-my-96{
    margin-top: -24rem;
    margin-bottom: -24rem;
  }

  .md\:-mx-96{
    margin-left: -24rem;
    margin-right: -24rem;
  }

  .md\:-my-px{
    margin-top: -1px;
    margin-bottom: -1px;
  }

  .md\:-mx-px{
    margin-left: -1px;
    margin-right: -1px;
  }

  .md\:mt-0{
    margin-top: 0;
  }

  .md\:mr-0{
    margin-right: 0;
  }

  .md\:mb-0{
    margin-bottom: 0;
  }

  .md\:ml-0{
    margin-left: 0;
  }

  .md\:mt-1{
    margin-top: 0.25rem;
  }

  .md\:mr-1{
    margin-right: 0.25rem;
  }

  .md\:mb-1{
    margin-bottom: 0.25rem;
  }

  .md\:ml-1{
    margin-left: 0.25rem;
  }

  .md\:mt-2{
    margin-top: 0.5rem;
  }

  .md\:mr-2{
    margin-right: 0.5rem;
  }

  .md\:mb-2{
    margin-bottom: 0.5rem;
  }

  .md\:ml-2{
    margin-left: 0.5rem;
  }

  .md\:mt-3{
    margin-top: 0.75rem;
  }

  .md\:mr-3{
    margin-right: 0.75rem;
  }

  .md\:mb-3{
    margin-bottom: 0.75rem;
  }

  .md\:ml-3{
    margin-left: 0.75rem;
  }

  .md\:mt-4{
    margin-top: 1rem;
  }

  .md\:mr-4{
    margin-right: 1rem;
  }

  .md\:mb-4{
    margin-bottom: 1rem;
  }

  .md\:ml-4{
    margin-left: 1rem;
  }

  .md\:mt-5{
    margin-top: 1.25rem;
  }

  .md\:mr-5{
    margin-right: 1.25rem;
  }

  .md\:mb-5{
    margin-bottom: 1.25rem;
  }

  .md\:ml-5{
    margin-left: 1.25rem;
  }

  .md\:mt-6{
    margin-top: 1.5rem;
  }

  .md\:mr-6{
    margin-right: 1.5rem;
  }

  .md\:mb-6{
    margin-bottom: 1.5rem;
  }

  .md\:ml-6{
    margin-left: 1.5rem;
  }

  .md\:mt-8{
    margin-top: 2rem;
  }

  .md\:mr-8{
    margin-right: 2rem;
  }

  .md\:mb-8{
    margin-bottom: 2rem;
  }

  .md\:ml-8{
    margin-left: 2rem;
  }

  .md\:mt-10{
    margin-top: 2.5rem;
  }

  .md\:mr-10{
    margin-right: 2.5rem;
  }

  .md\:mb-10{
    margin-bottom: 2.5rem;
  }

  .md\:ml-10{
    margin-left: 2.5rem;
  }

  .md\:mt-12{
    margin-top: 3rem;
  }

  .md\:mr-12{
    margin-right: 3rem;
  }

  .md\:mb-12{
    margin-bottom: 3rem;
  }

  .md\:ml-12{
    margin-left: 3rem;
  }

  .md\:mt-16{
    margin-top: 4rem;
  }

  .md\:mr-16{
    margin-right: 4rem;
  }

  .md\:mb-16{
    margin-bottom: 4rem;
  }

  .md\:ml-16{
    margin-left: 4rem;
  }

  .md\:mt-20{
    margin-top: 5rem;
  }

  .md\:mr-20{
    margin-right: 5rem;
  }

  .md\:mb-20{
    margin-bottom: 5rem;
  }

  .md\:ml-20{
    margin-left: 5rem;
  }

  .md\:mt-24{
    margin-top: 6rem;
  }

  .md\:mr-24{
    margin-right: 6rem;
  }

  .md\:mb-24{
    margin-bottom: 6rem;
  }

  .md\:ml-24{
    margin-left: 6rem;
  }

  .md\:mt-32{
    margin-top: 8rem;
  }

  .md\:mr-32{
    margin-right: 8rem;
  }

  .md\:mb-32{
    margin-bottom: 8rem;
  }

  .md\:ml-32{
    margin-left: 8rem;
  }

  .md\:mt-40{
    margin-top: 10rem;
  }

  .md\:mr-40{
    margin-right: 10rem;
  }

  .md\:mb-40{
    margin-bottom: 10rem;
  }

  .md\:ml-40{
    margin-left: 10rem;
  }

  .md\:mt-48{
    margin-top: 12rem;
  }

  .md\:mr-48{
    margin-right: 12rem;
  }

  .md\:mb-48{
    margin-bottom: 12rem;
  }

  .md\:ml-48{
    margin-left: 12rem;
  }

  .md\:mt-56{
    margin-top: 14rem;
  }

  .md\:mr-56{
    margin-right: 14rem;
  }

  .md\:mb-56{
    margin-bottom: 14rem;
  }

  .md\:ml-56{
    margin-left: 14rem;
  }

  .md\:mt-64{
    margin-top: 16rem;
  }

  .md\:mr-64{
    margin-right: 16rem;
  }

  .md\:mb-64{
    margin-bottom: 16rem;
  }

  .md\:ml-64{
    margin-left: 16rem;
  }

  .md\:mt-72{
    margin-top: 18rem;
  }

  .md\:mr-72{
    margin-right: 18rem;
  }

  .md\:mb-72{
    margin-bottom: 18rem;
  }

  .md\:ml-72{
    margin-left: 18rem;
  }

  .md\:mt-84{
    margin-top: 21rem;
  }

  .md\:mr-84{
    margin-right: 21rem;
  }

  .md\:mb-84{
    margin-bottom: 21rem;
  }

  .md\:ml-84{
    margin-left: 21rem;
  }

  .md\:mt-96{
    margin-top: 24rem;
  }

  .md\:mr-96{
    margin-right: 24rem;
  }

  .md\:mb-96{
    margin-bottom: 24rem;
  }

  .md\:ml-96{
    margin-left: 24rem;
  }

  .md\:mt-auto{
    margin-top: auto;
  }

  .md\:mr-auto{
    margin-right: auto;
  }

  .md\:mb-auto{
    margin-bottom: auto;
  }

  .md\:ml-auto{
    margin-left: auto;
  }

  .md\:mt-px{
    margin-top: 1px;
  }

  .md\:mr-px{
    margin-right: 1px;
  }

  .md\:mb-px{
    margin-bottom: 1px;
  }

  .md\:ml-px{
    margin-left: 1px;
  }

  .md\:-mt-1{
    margin-top: -0.25rem;
  }

  .md\:-mr-1{
    margin-right: -0.25rem;
  }

  .md\:-mb-1{
    margin-bottom: -0.25rem;
  }

  .md\:-ml-1{
    margin-left: -0.25rem;
  }

  .md\:-mt-2{
    margin-top: -0.5rem;
  }

  .md\:-mr-2{
    margin-right: -0.5rem;
  }

  .md\:-mb-2{
    margin-bottom: -0.5rem;
  }

  .md\:-ml-2{
    margin-left: -0.5rem;
  }

  .md\:-mt-3{
    margin-top: -0.75rem;
  }

  .md\:-mr-3{
    margin-right: -0.75rem;
  }

  .md\:-mb-3{
    margin-bottom: -0.75rem;
  }

  .md\:-ml-3{
    margin-left: -0.75rem;
  }

  .md\:-mt-4{
    margin-top: -1rem;
  }

  .md\:-mr-4{
    margin-right: -1rem;
  }

  .md\:-mb-4{
    margin-bottom: -1rem;
  }

  .md\:-ml-4{
    margin-left: -1rem;
  }

  .md\:-mt-5{
    margin-top: -1.25rem;
  }

  .md\:-mr-5{
    margin-right: -1.25rem;
  }

  .md\:-mb-5{
    margin-bottom: -1.25rem;
  }

  .md\:-ml-5{
    margin-left: -1.25rem;
  }

  .md\:-mt-6{
    margin-top: -1.5rem;
  }

  .md\:-mr-6{
    margin-right: -1.5rem;
  }

  .md\:-mb-6{
    margin-bottom: -1.5rem;
  }

  .md\:-ml-6{
    margin-left: -1.5rem;
  }

  .md\:-mt-8{
    margin-top: -2rem;
  }

  .md\:-mr-8{
    margin-right: -2rem;
  }

  .md\:-mb-8{
    margin-bottom: -2rem;
  }

  .md\:-ml-8{
    margin-left: -2rem;
  }

  .md\:-mt-10{
    margin-top: -2.5rem;
  }

  .md\:-mr-10{
    margin-right: -2.5rem;
  }

  .md\:-mb-10{
    margin-bottom: -2.5rem;
  }

  .md\:-ml-10{
    margin-left: -2.5rem;
  }

  .md\:-mt-12{
    margin-top: -3rem;
  }

  .md\:-mr-12{
    margin-right: -3rem;
  }

  .md\:-mb-12{
    margin-bottom: -3rem;
  }

  .md\:-ml-12{
    margin-left: -3rem;
  }

  .md\:-mt-16{
    margin-top: -4rem;
  }

  .md\:-mr-16{
    margin-right: -4rem;
  }

  .md\:-mb-16{
    margin-bottom: -4rem;
  }

  .md\:-ml-16{
    margin-left: -4rem;
  }

  .md\:-mt-20{
    margin-top: -5rem;
  }

  .md\:-mr-20{
    margin-right: -5rem;
  }

  .md\:-mb-20{
    margin-bottom: -5rem;
  }

  .md\:-ml-20{
    margin-left: -5rem;
  }

  .md\:-mt-24{
    margin-top: -6rem;
  }

  .md\:-mr-24{
    margin-right: -6rem;
  }

  .md\:-mb-24{
    margin-bottom: -6rem;
  }

  .md\:-ml-24{
    margin-left: -6rem;
  }

  .md\:-mt-32{
    margin-top: -8rem;
  }

  .md\:-mr-32{
    margin-right: -8rem;
  }

  .md\:-mb-32{
    margin-bottom: -8rem;
  }

  .md\:-ml-32{
    margin-left: -8rem;
  }

  .md\:-mt-40{
    margin-top: -10rem;
  }

  .md\:-mr-40{
    margin-right: -10rem;
  }

  .md\:-mb-40{
    margin-bottom: -10rem;
  }

  .md\:-ml-40{
    margin-left: -10rem;
  }

  .md\:-mt-48{
    margin-top: -12rem;
  }

  .md\:-mr-48{
    margin-right: -12rem;
  }

  .md\:-mb-48{
    margin-bottom: -12rem;
  }

  .md\:-ml-48{
    margin-left: -12rem;
  }

  .md\:-mt-56{
    margin-top: -14rem;
  }

  .md\:-mr-56{
    margin-right: -14rem;
  }

  .md\:-mb-56{
    margin-bottom: -14rem;
  }

  .md\:-ml-56{
    margin-left: -14rem;
  }

  .md\:-mt-64{
    margin-top: -16rem;
  }

  .md\:-mr-64{
    margin-right: -16rem;
  }

  .md\:-mb-64{
    margin-bottom: -16rem;
  }

  .md\:-ml-64{
    margin-left: -16rem;
  }

  .md\:-mt-72{
    margin-top: -18rem;
  }

  .md\:-mr-72{
    margin-right: -18rem;
  }

  .md\:-mb-72{
    margin-bottom: -18rem;
  }

  .md\:-ml-72{
    margin-left: -18rem;
  }

  .md\:-mt-84{
    margin-top: -21rem;
  }

  .md\:-mr-84{
    margin-right: -21rem;
  }

  .md\:-mb-84{
    margin-bottom: -21rem;
  }

  .md\:-ml-84{
    margin-left: -21rem;
  }

  .md\:-mt-96{
    margin-top: -24rem;
  }

  .md\:-mr-96{
    margin-right: -24rem;
  }

  .md\:-mb-96{
    margin-bottom: -24rem;
  }

  .md\:-ml-96{
    margin-left: -24rem;
  }

  .md\:-mt-px{
    margin-top: -1px;
  }

  .md\:-mr-px{
    margin-right: -1px;
  }

  .md\:-mb-px{
    margin-bottom: -1px;
  }

  .md\:-ml-px{
    margin-left: -1px;
  }

  .md\:max-h-full{
    max-height: 100%;
  }

  .md\:max-h-screen{
    max-height: 100vh;
  }

  .md\:max-w-none{
    max-width: none;
  }

  .md\:max-w-xs{
    max-width: 20rem;
  }

  .md\:max-w-sm{
    max-width: 24rem;
  }

  .md\:max-w-md{
    max-width: 28rem;
  }

  .md\:max-w-lg{
    max-width: 32rem;
  }

  .md\:max-w-xl{
    max-width: 36rem;
  }

  .md\:max-w-2xl{
    max-width: 42rem;
  }

  .md\:max-w-3xl{
    max-width: 48rem;
  }

  .md\:max-w-4xl{
    max-width: 56rem;
  }

  .md\:max-w-5xl{
    max-width: 64rem;
  }

  .md\:max-w-6xl{
    max-width: 72rem;
  }

  .md\:max-w-full{
    max-width: 100%;
  }

  .md\:min-h-0{
    min-height: 0;
  }

  .md\:min-h-full{
    min-height: 100%;
  }

  .md\:min-h-screen{
    min-height: 100vh;
  }

  .md\:min-w-0{
    min-width: 0;
  }

  .md\:min-w-full{
    min-width: 100%;
  }

  .md\:object-contain{
    -o-object-fit: contain;
       object-fit: contain;
  }

  .md\:p-0{
    padding: 0;
  }

  .md\:p-1{
    padding: 0.25rem;
  }

  .md\:p-2{
    padding: 0.5rem;
  }

  .md\:p-3{
    padding: 0.75rem;
  }

  .md\:p-4{
    padding: 1rem;
  }

  .md\:p-5{
    padding: 1.25rem;
  }

  .md\:p-6{
    padding: 1.5rem;
  }

  .md\:p-8{
    padding: 2rem;
  }

  .md\:p-10{
    padding: 2.5rem;
  }

  .md\:p-12{
    padding: 3rem;
  }

  .md\:p-16{
    padding: 4rem;
  }

  .md\:p-20{
    padding: 5rem;
  }

  .md\:p-24{
    padding: 6rem;
  }

  .md\:p-32{
    padding: 8rem;
  }

  .md\:p-40{
    padding: 10rem;
  }

  .md\:p-48{
    padding: 12rem;
  }

  .md\:p-56{
    padding: 14rem;
  }

  .md\:p-64{
    padding: 16rem;
  }

  .md\:p-72{
    padding: 18rem;
  }

  .md\:p-84{
    padding: 21rem;
  }

  .md\:p-96{
    padding: 24rem;
  }

  .md\:p-px{
    padding: 1px;
  }

  .md\:py-0{
    padding-top: 0;
    padding-bottom: 0;
  }

  .md\:px-0{
    padding-left: 0;
    padding-right: 0;
  }

  .md\:py-1{
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .md\:px-1{
    padding-left: 0.25rem;
    padding-right: 0.25rem;
  }

  .md\:py-2{
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .md\:px-2{
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }

  .md\:py-3{
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }

  .md\:px-3{
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }

  .md\:py-4{
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .md\:px-4{
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .md\:py-5{
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }

  .md\:px-5{
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }

  .md\:py-6{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .md\:px-6{
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .md\:py-8{
    padding-top: 2rem;
    padding-bottom: 2rem;
  }

  .md\:px-8{
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .md\:py-10{
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }

  .md\:px-10{
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .md\:py-12{
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .md\:px-12{
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .md\:py-16{
    padding-top: 4rem;
    padding-bottom: 4rem;
  }

  .md\:px-16{
    padding-left: 4rem;
    padding-right: 4rem;
  }

  .md\:py-20{
    padding-top: 5rem;
    padding-bottom: 5rem;
  }

  .md\:px-20{
    padding-left: 5rem;
    padding-right: 5rem;
  }

  .md\:py-24{
    padding-top: 6rem;
    padding-bottom: 6rem;
  }

  .md\:px-24{
    padding-left: 6rem;
    padding-right: 6rem;
  }

  .md\:py-32{
    padding-top: 8rem;
    padding-bottom: 8rem;
  }

  .md\:px-32{
    padding-left: 8rem;
    padding-right: 8rem;
  }

  .md\:py-40{
    padding-top: 10rem;
    padding-bottom: 10rem;
  }

  .md\:px-40{
    padding-left: 10rem;
    padding-right: 10rem;
  }

  .md\:py-48{
    padding-top: 12rem;
    padding-bottom: 12rem;
  }

  .md\:px-48{
    padding-left: 12rem;
    padding-right: 12rem;
  }

  .md\:py-56{
    padding-top: 14rem;
    padding-bottom: 14rem;
  }

  .md\:px-56{
    padding-left: 14rem;
    padding-right: 14rem;
  }

  .md\:py-64{
    padding-top: 16rem;
    padding-bottom: 16rem;
  }

  .md\:px-64{
    padding-left: 16rem;
    padding-right: 16rem;
  }

  .md\:py-72{
    padding-top: 18rem;
    padding-bottom: 18rem;
  }

  .md\:px-72{
    padding-left: 18rem;
    padding-right: 18rem;
  }

  .md\:py-84{
    padding-top: 21rem;
    padding-bottom: 21rem;
  }

  .md\:px-84{
    padding-left: 21rem;
    padding-right: 21rem;
  }

  .md\:py-96{
    padding-top: 24rem;
    padding-bottom: 24rem;
  }

  .md\:px-96{
    padding-left: 24rem;
    padding-right: 24rem;
  }

  .md\:py-px{
    padding-top: 1px;
    padding-bottom: 1px;
  }

  .md\:px-px{
    padding-left: 1px;
    padding-right: 1px;
  }

  .md\:pt-0{
    padding-top: 0;
  }

  .md\:pr-0{
    padding-right: 0;
  }

  .md\:pb-0{
    padding-bottom: 0;
  }

  .md\:pl-0{
    padding-left: 0;
  }

  .md\:pt-1{
    padding-top: 0.25rem;
  }

  .md\:pr-1{
    padding-right: 0.25rem;
  }

  .md\:pb-1{
    padding-bottom: 0.25rem;
  }

  .md\:pl-1{
    padding-left: 0.25rem;
  }

  .md\:pt-2{
    padding-top: 0.5rem;
  }

  .md\:pr-2{
    padding-right: 0.5rem;
  }

  .md\:pb-2{
    padding-bottom: 0.5rem;
  }

  .md\:pl-2{
    padding-left: 0.5rem;
  }

  .md\:pt-3{
    padding-top: 0.75rem;
  }

  .md\:pr-3{
    padding-right: 0.75rem;
  }

  .md\:pb-3{
    padding-bottom: 0.75rem;
  }

  .md\:pl-3{
    padding-left: 0.75rem;
  }

  .md\:pt-4{
    padding-top: 1rem;
  }

  .md\:pr-4{
    padding-right: 1rem;
  }

  .md\:pb-4{
    padding-bottom: 1rem;
  }

  .md\:pl-4{
    padding-left: 1rem;
  }

  .md\:pt-5{
    padding-top: 1.25rem;
  }

  .md\:pr-5{
    padding-right: 1.25rem;
  }

  .md\:pb-5{
    padding-bottom: 1.25rem;
  }

  .md\:pl-5{
    padding-left: 1.25rem;
  }

  .md\:pt-6{
    padding-top: 1.5rem;
  }

  .md\:pr-6{
    padding-right: 1.5rem;
  }

  .md\:pb-6{
    padding-bottom: 1.5rem;
  }

  .md\:pl-6{
    padding-left: 1.5rem;
  }

  .md\:pt-8{
    padding-top: 2rem;
  }

  .md\:pr-8{
    padding-right: 2rem;
  }

  .md\:pb-8{
    padding-bottom: 2rem;
  }

  .md\:pl-8{
    padding-left: 2rem;
  }

  .md\:pt-10{
    padding-top: 2.5rem;
  }

  .md\:pr-10{
    padding-right: 2.5rem;
  }

  .md\:pb-10{
    padding-bottom: 2.5rem;
  }

  .md\:pl-10{
    padding-left: 2.5rem;
  }

  .md\:pt-12{
    padding-top: 3rem;
  }

  .md\:pr-12{
    padding-right: 3rem;
  }

  .md\:pb-12{
    padding-bottom: 3rem;
  }

  .md\:pl-12{
    padding-left: 3rem;
  }

  .md\:pt-16{
    padding-top: 4rem;
  }

  .md\:pr-16{
    padding-right: 4rem;
  }

  .md\:pb-16{
    padding-bottom: 4rem;
  }

  .md\:pl-16{
    padding-left: 4rem;
  }

  .md\:pt-20{
    padding-top: 5rem;
  }

  .md\:pr-20{
    padding-right: 5rem;
  }

  .md\:pb-20{
    padding-bottom: 5rem;
  }

  .md\:pl-20{
    padding-left: 5rem;
  }

  .md\:pt-24{
    padding-top: 6rem;
  }

  .md\:pr-24{
    padding-right: 6rem;
  }

  .md\:pb-24{
    padding-bottom: 6rem;
  }

  .md\:pl-24{
    padding-left: 6rem;
  }

  .md\:pt-32{
    padding-top: 8rem;
  }

  .md\:pr-32{
    padding-right: 8rem;
  }

  .md\:pb-32{
    padding-bottom: 8rem;
  }

  .md\:pl-32{
    padding-left: 8rem;
  }

  .md\:pt-40{
    padding-top: 10rem;
  }

  .md\:pr-40{
    padding-right: 10rem;
  }

  .md\:pb-40{
    padding-bottom: 10rem;
  }

  .md\:pl-40{
    padding-left: 10rem;
  }

  .md\:pt-48{
    padding-top: 12rem;
  }

  .md\:pr-48{
    padding-right: 12rem;
  }

  .md\:pb-48{
    padding-bottom: 12rem;
  }

  .md\:pl-48{
    padding-left: 12rem;
  }

  .md\:pt-56{
    padding-top: 14rem;
  }

  .md\:pr-56{
    padding-right: 14rem;
  }

  .md\:pb-56{
    padding-bottom: 14rem;
  }

  .md\:pl-56{
    padding-left: 14rem;
  }

  .md\:pt-64{
    padding-top: 16rem;
  }

  .md\:pr-64{
    padding-right: 16rem;
  }

  .md\:pb-64{
    padding-bottom: 16rem;
  }

  .md\:pl-64{
    padding-left: 16rem;
  }

  .md\:pt-72{
    padding-top: 18rem;
  }

  .md\:pr-72{
    padding-right: 18rem;
  }

  .md\:pb-72{
    padding-bottom: 18rem;
  }

  .md\:pl-72{
    padding-left: 18rem;
  }

  .md\:pt-84{
    padding-top: 21rem;
  }

  .md\:pr-84{
    padding-right: 21rem;
  }

  .md\:pb-84{
    padding-bottom: 21rem;
  }

  .md\:pl-84{
    padding-left: 21rem;
  }

  .md\:pt-96{
    padding-top: 24rem;
  }

  .md\:pr-96{
    padding-right: 24rem;
  }

  .md\:pb-96{
    padding-bottom: 24rem;
  }

  .md\:pl-96{
    padding-left: 24rem;
  }

  .md\:pt-px{
    padding-top: 1px;
  }

  .md\:pr-px{
    padding-right: 1px;
  }

  .md\:pb-px{
    padding-bottom: 1px;
  }

  .md\:pl-px{
    padding-left: 1px;
  }

  .md\:static{
    position: static;
  }

  .md\:fixed{
    position: fixed;
  }

  .md\:absolute{
    position: absolute;
  }

  .md\:relative{
    position: relative;
  }

  .md\:sticky{
    position: -webkit-sticky;
    position: sticky;
  }

  .md\:inset-0{
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  .md\:inset-auto{
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
  }

  .md\:inset-y-0{
    top: 0;
    bottom: 0;
  }

  .md\:inset-x-0{
    right: 0;
    left: 0;
  }

  .md\:inset-y-auto{
    top: auto;
    bottom: auto;
  }

  .md\:inset-x-auto{
    right: auto;
    left: auto;
  }

  .md\:top-0{
    top: 0;
  }

  .md\:right-0{
    right: 0;
  }

  .md\:bottom-0{
    bottom: 0;
  }

  .md\:left-0{
    left: 0;
  }

  .md\:top-auto{
    top: auto;
  }

  .md\:right-auto{
    right: auto;
  }

  .md\:bottom-auto{
    bottom: auto;
  }

  .md\:left-auto{
    left: auto;
  }

  .md\:resize-none{
    resize: none;
  }

  .md\:resize-y{
    resize: vertical;
  }

  .md\:resize-x{
    resize: horizontal;
  }

  .md\:resize{
    resize: both;
  }

  .md\:shadow-xs{
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05);
  }

  .md\:shadow-sm{
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  }

  .md\:shadow{
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:shadow-md{
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .md\:shadow-lg{
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .md\:shadow-xl{
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .md\:shadow-2xl{
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .md\:shadow-inner{
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:shadow-outline{
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .md\:shadow-none{
    box-shadow: none;
  }

  .md\:hover\:shadow-xs:hover{
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05);
  }

  .md\:hover\:shadow-sm:hover{
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  }

  .md\:hover\:shadow:hover{
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:hover\:shadow-md:hover{
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .md\:hover\:shadow-lg:hover{
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .md\:hover\:shadow-xl:hover{
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .md\:hover\:shadow-2xl:hover{
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .md\:hover\:shadow-inner:hover{
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:hover\:shadow-outline:hover{
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .md\:hover\:shadow-none:hover{
    box-shadow: none;
  }

  .md\:focus\:shadow-xs:focus{
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05);
  }

  .md\:focus\:shadow-sm:focus{
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  }

  .md\:focus\:shadow:focus{
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:focus\:shadow-md:focus{
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .md\:focus\:shadow-lg:focus{
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .md\:focus\:shadow-xl:focus{
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .md\:focus\:shadow-2xl:focus{
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .md\:focus\:shadow-inner:focus{
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:focus\:shadow-outline:focus{
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .md\:focus\:shadow-none:focus{
    box-shadow: none;
  }

  .md\:fill-current{
    fill: currentColor;
  }

  .md\:stroke-current{
    stroke: currentColor;
  }

  .md\:stroke-0{
    stroke-width: 0;
  }

  .md\:stroke-1{
    stroke-width: 1;
  }

  .md\:stroke-2{
    stroke-width: 2;
  }

  .md\:table-auto{
    table-layout: auto;
  }

  .md\:table-fixed{
    table-layout: fixed;
  }

  .md\:text-left{
    text-align: left;
  }

  .md\:text-center{
    text-align: center;
  }

  .md\:text-right{
    text-align: right;
  }

  .md\:text-justify{
    text-align: justify;
  }
  .md\:w-0{
    width: 0;
  }

  .md\:w-1{
    width: 0.25rem;
  }

  .md\:w-2{
    width: 0.5rem;
  }

  .md\:w-3{
    width: 0.75rem;
  }

  .md\:w-4{
    width: 1rem;
  }

  .md\:w-5{
    width: 1.25rem;
  }

  .md\:w-6{
    width: 1.5rem;
  }

  .md\:w-8{
    width: 2rem;
  }

  .md\:w-10{
    width: 2.5rem;
  }

  .md\:w-12{
    width: 3rem;
  }

  .md\:w-16{
    width: 4rem;
  }

  .md\:w-20{
    width: 5rem;
  }

  .md\:w-24{
    width: 6rem;
  }

  .md\:w-32{
    width: 8rem;
  }

  .md\:w-40{
    width: 10rem;
  }

  .md\:w-48{
    width: 12rem;
  }

  .md\:w-56{
    width: 14rem;
  }

  .md\:w-64{
    width: 16rem;
  }

  .md\:w-72{
    width: 18rem;
  }

  .md\:w-84{
    width: 21rem;
  }

  .md\:w-96{
    width: 24rem;
  }

  .md\:w-auto{
    width: auto;
  }

  .md\:w-px{
    width: 1px;
  }

  .md\:w-1\/2{
    width: 50%;
  }

  .md\:w-1\/3{
    width: 33.333333%;
  }

  .md\:w-2\/3{
    width: 66.666667%;
  }

  .md\:w-1\/4{
    width: 25%;
  }

  .md\:w-2\/4{
    width: 50%;
  }

  .md\:w-3\/4{
    width: 75%;
  }

  .md\:w-1\/5{
    width: 20%;
  }

  .md\:w-2\/5{
    width: 40%;
  }

  .md\:w-3\/5{
    width: 60%;
  }

  .md\:w-4\/5{
    width: 80%;
  }

  .md\:w-1\/6{
    width: 16.666667%;
  }

  .md\:w-2\/6{
    width: 33.333333%;
  }

  .md\:w-3\/6{
    width: 50%;
  }

  .md\:w-4\/6{
    width: 66.666667%;
  }

  .md\:w-5\/6{
    width: 83.333333%;
  }

  .md\:w-1\/12{
    width: 8.333333%;
  }

  .md\:w-2\/12{
    width: 16.666667%;
  }

  .md\:w-3\/12{
    width: 25%;
  }

  .md\:w-4\/12{
    width: 33.333333%;
  }

  .md\:w-5\/12{
    width: 41.666667%;
  }

  .md\:w-6\/12{
    width: 50%;
  }

  .md\:w-7\/12{
    width: 58.333333%;
  }

  .md\:w-8\/12{
    width: 66.666667%;
  }

  .md\:w-9\/12{
    width: 75%;
  }

  .md\:w-10\/12{
    width: 83.333333%;
  }

  .md\:w-11\/12{
    width: 91.666667%;
  }

  .md\:w-full{
    width: 100%;
  }

  .md\:w-screen{
    width: 100vw;
  }

  .md\:z-0{
    z-index: 0;
  }

  .md\:z-10{
    z-index: 10;
  }

  .md\:z-20{
    z-index: 20;
  }

  .md\:z-30{
    z-index: 30;
  }

  .md\:z-40{
    z-index: 40;
  }

  .md\:z-50{
    z-index: 50;
  }

  .md\:z-auto{
    z-index: auto;
  }

  .md\:gap-0{
    grid-gap: 0;
    gap: 0;
  }

  .md\:gap-1{
    grid-gap: 0.25rem;
    gap: 0.25rem;
  }

  .md\:gap-2{
    grid-gap: 0.5rem;
    gap: 0.5rem;
  }

  .md\:gap-3{
    grid-gap: 0.75rem;
    gap: 0.75rem;
  }

  .md\:gap-4{
    grid-gap: 1rem;
    gap: 1rem;
  }

  .md\:gap-5{
    grid-gap: 1.25rem;
    gap: 1.25rem;
  }

  .md\:gap-6{
    grid-gap: 1.5rem;
    gap: 1.5rem;
  }

  .md\:gap-8{
    grid-gap: 2rem;
    gap: 2rem;
  }

  .md\:gap-10{
    grid-gap: 2.5rem;
    gap: 2.5rem;
  }

  .md\:gap-12{
    grid-gap: 3rem;
    gap: 3rem;
  }

  .md\:gap-16{
    grid-gap: 4rem;
    gap: 4rem;
  }

  .md\:gap-20{
    grid-gap: 5rem;
    gap: 5rem;
  }

  .md\:gap-24{
    grid-gap: 6rem;
    gap: 6rem;
  }

  .md\:gap-32{
    grid-gap: 8rem;
    gap: 8rem;
  }

  .md\:gap-40{
    grid-gap: 10rem;
    gap: 10rem;
  }

  .md\:gap-48{
    grid-gap: 12rem;
    gap: 12rem;
  }

  .md\:gap-56{
    grid-gap: 14rem;
    gap: 14rem;
  }

  .md\:gap-64{
    grid-gap: 16rem;
    gap: 16rem;
  }

  .md\:gap-72{
    grid-gap: 18rem;
    gap: 18rem;
  }

  .md\:gap-84{
    grid-gap: 21rem;
    gap: 21rem;
  }

  .md\:gap-96{
    grid-gap: 24rem;
    gap: 24rem;
  }

  .md\:gap-px{
    grid-gap: 1px;
    gap: 1px;
  }

  .md\:grid-cols-1{
    grid-template-columns: repeat(1, minmax(0, 1fr));
  }

  .md\:grid-cols-2{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .md\:grid-cols-3{
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .md\:grid-cols-4{
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .md\:grid-cols-5{
    grid-template-columns: repeat(5, minmax(0, 1fr));
  }

  .md\:grid-cols-6{
    grid-template-columns: repeat(6, minmax(0, 1fr));
  }

  .md\:grid-cols-7{
    grid-template-columns: repeat(7, minmax(0, 1fr));
  }

  .md\:grid-cols-8{
    grid-template-columns: repeat(8, minmax(0, 1fr));
  }

  .md\:grid-cols-9{
    grid-template-columns: repeat(9, minmax(0, 1fr));
  }

  .md\:grid-cols-10{
    grid-template-columns: repeat(10, minmax(0, 1fr));
  }

  .md\:grid-cols-11{
    grid-template-columns: repeat(11, minmax(0, 1fr));
  }

  .md\:grid-cols-12{
    grid-template-columns: repeat(12, minmax(0, 1fr));
  }

  .md\:grid-cols-none{
    grid-template-columns: none;
  }

  .md\:col-auto{
    grid-column: auto;
  }

  .md\:col-span-1{
    grid-column: span 1 / span 1;
  }

  .md\:col-span-2{
    grid-column: span 2 / span 2;
  }

  .md\:col-span-3{
    grid-column: span 3 / span 3;
  }

  .md\:col-span-4{
    grid-column: span 4 / span 4;
  }

  .md\:col-span-5{
    grid-column: span 5 / span 5;
  }

  .md\:col-span-6{
    grid-column: span 6 / span 6;
  }

  .md\:col-span-7{
    grid-column: span 7 / span 7;
  }

  .md\:col-span-8{
    grid-column: span 8 / span 8;
  }

  .md\:col-span-9{
    grid-column: span 9 / span 9;
  }

  .md\:col-span-10{
    grid-column: span 10 / span 10;
  }

  .md\:col-span-11{
    grid-column: span 11 / span 11;
  }

  .md\:col-span-12{
    grid-column: span 12 / span 12;
  }
}
  </style>
  @livewireStyles 
  <title>Warung Fajar</title>
  <style>
    .filterCategory::-webkit-scrollbar {
      height: 6px;
    }
    
    .filterCategory::-webkit-scrollbar-thumb {
      background-color: rgba(169, 169, 169, 0.699);
      border-radius: 10px
    }
  </style>
</head>
<body class="bg-gray-100" data-theme="light">

<x-navbar></x-navbar>

<div class="h-screen flex flex-row flex-wrap">
  

  <div class="bg-gray-100 flex-1 p-6 md:p-2 md:mt-16"> 
    @yield('content')
  </div>
</div>

<!-- script -->
@livewireScripts
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script src="{{asset('cleopatra/dist')}}/js/scripts.js"></script>
<!-- end script -->

</body>
</html>

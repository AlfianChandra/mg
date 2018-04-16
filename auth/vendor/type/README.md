# jquery.typeText
Prints the contents of an element, or prints a string inside an element one character at a time.

- [Demo](http://codepen.io/Lane/full/MKBPPV/)

## Usage

**`typeText( [string], [Object] )`**

```javascript
// prints the text in all of the children DOM nodes of the provided selector
$("#element").typeText();
```

or

```javascript
// prints the string in a paragraph appended to the selector
$("#element").typeText("This is a line of text.");
```

## Options

  - `lineWait`: amount of time to wait between lines (elements)
  - `typeSpeed`: the delay in milliseconds to wait between each character
  - `then`: a function to execute once printing is complete

## Limitations

  - Does not print deep levels of nested nodes

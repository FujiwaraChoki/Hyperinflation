document.addEventListener('DOMContentLoaded', () => {
    // Set margin left based on amount of words
    const text = document.querySelector('.text');
    const line = document.querySelector('.v1');
    // Get Margin left of text element
    const textMarginLeft = parseInt(window.getComputedStyle(text).marginLeft);
    // Get height of text element
    const textHeight = parseInt(window.getComputedStyle(text).height);
    // Calculate length of line, based on text height
    const lineLength = textHeight * 1.25;
    // Set line length
    line.style.height = `${lineLength}px`;
    // Calculate margin left, when using overflow-wrap: break-word; with a width of 40%.
    console.log(textMarginLeft);
    const marginLeft = textMarginLeft - 30;
    line.style.marginLeft = `${marginLeft}px`;
});
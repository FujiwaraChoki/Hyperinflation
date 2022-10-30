document.addEventListener("DOMContentLoaded", () => {
  // Set margin left based on amount of words
  const text = document.querySelector(".text");
  const line = document.querySelector(".v1");
  // Get Margin left of text element
  const textMarginLeft = parseInt(window.getComputedStyle(text).marginLeft);
  // Get height of text element
  const textHeight = parseInt(window.getComputedStyle(text).height);
  // Calculate length of line, based on text height
  let lineLength = textHeight * 1.25;
  if (window.location.href.endsWith("page?q=wmrpblk")) {
    lineLength = lineLength - 50;
  }
  line.style.height = `${lineLength}px`;
  // Calculate margin left, when using overflow-wrap: break-word; with a width of 40%.
  const marginLeft = textMarginLeft - 30;

  line.style.marginLeft = `${marginLeft}px`;
});

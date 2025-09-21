/******/ (() => { // webpackBootstrap
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
const filterAndSortFunction = document.querySelector('.filterSortFunction');
if (filterAndSortFunction) {
  const filterLinks = document.querySelectorAll('.filterContent a');
  const recipeCards = document.querySelectorAll('.opskriftCard');
  const sortLinks = document.querySelectorAll('.sortContent a');
  const container = document.querySelector('.allCards');

  // Filter funktion
  filterLinks.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const filter = link.textContent.trim().toLowerCase();
      recipeCards.forEach(card => {
        const role = card.dataset.authorRole.toLowerCase();
        const category = card.dataset.category.toLowerCase();
        if (filter.includes('amateur') && role.includes('amateur_chef') || filter.includes('professional') && role.includes('professional_chef') || category.includes(filter)) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Sorterings funktion

  sortLinks.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const sortType = link.textContent.trim().toLowerCase();
      console.log('Sort type:', sortType);
      const cardsArray = Array.from(recipeCards);
      console.log('Before sort - first card title:', cardsArray[0]?.dataset.title);
      console.log('Before sort - first card date:', cardsArray[0]?.dataset.date);
      cardsArray.sort((a, b) => {
        if (sortType.includes('a-z')) {
          return a.dataset.title.localeCompare(b.dataset.title);
        } else if (sortType.includes('newest')) {
          return new Date(b.dataset.date) - new Date(a.dataset.date);
        }
        return 0;
      });
      console.log('After sort - first card title:', cardsArray[0]?.dataset.title);
      console.log('After sort - first card date:', cardsArray[0]?.dataset.date);
      cardsArray.forEach(card => container.appendChild(card));
    });
  });
}
/******/ })()
;
//# sourceMappingURL=index.js.map
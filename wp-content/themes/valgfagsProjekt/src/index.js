const filterAndSortFunction = document.querySelector('.filterSortFunction');


if (filterAndSortFunction) {
const filterLinks = document.querySelectorAll('.filterContent a');
const recipeCards = document.querySelectorAll('.opskriftCard');
const sortLinks = document.querySelectorAll('.sortContent a');
const container = document.querySelector('.allCards');
const showAll = document.querySelector('.showAllButton');




// Filter funktion
filterLinks.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const filter = link.textContent.trim().toLowerCase();

      console.log('Filter clicked:', filter);
      
      if (filter.includes('amateur') || filter.includes('professional')) {
        console.log('All roles:', Array.from(recipeCards).map(card => card.dataset.authorRole));
      }

      recipeCards.forEach(card => {
        const role = card.dataset.authorRole.toLowerCase();
        const category = card.dataset.category.toLowerCase();

        console.log('Checking card - Role:', role, 'Filter:', filter);
        console.log('Amateur match:', filter.includes('amateur') && role.includes('amateur_chef'));
        console.log('Professional match:', filter.includes('professional') && role.includes('professional'));

        if ((filter.includes('amateur') && role.includes('amateur_chef')) || 
            (filter.includes('professional') && role.includes('professional')) ||
            category.includes(filter)) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

showAll.addEventListener('click', () => {
  recipeCards.forEach(card => {
    card.style.display = '';
  });
});




// Sorterings funktion

sortLinks.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const sortType = link.textContent.trim().toLowerCase();
      
      const cardsArray = Array.from(recipeCards);
      
      
      cardsArray.sort((a, b) => {
        if (sortType.includes('a-z')) {
          return a.dataset.title.localeCompare(b.dataset.title);
        } else if (sortType.includes('newest')) {
          return new Date(b.dataset.date) - new Date(a.dataset.date);
        }
        return 0;
      });
      
      cardsArray.forEach(card => container.appendChild(card));
    });
  });

}
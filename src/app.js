window.addEventListener('DOMContentLoaded', () => {
  const searchBtn = document.getElementById('search-btn');
  const searchContainer = document.getElementById('search-container');
  const searchExitBtn = document.getElementById('search-exit-btn');
  const searchInput = document.getElementById('search');
  let search = false;

  const searchAnim = (direction) => {
    searchContainer.animate([{
        opacity: 0
      },
      {
        opacity: 1
      }
    ], {
      duration: 100,
      direction: direction ? 'normal' : 'reverse',
      iterations: 1
    });
  }

  const searchModal = () => {
    if (search) {
      searchInput.value = '';
      const topPos = window.scrollY;
      document.body.style.position = 'fixed';
      document.body.style.top = `-${topPos}px`;
      searchContainer.style.display = 'flex';
      searchAnim(true);
      searchInput.select();
    } else {
      const scrollY = document.body.style.top;
      document.body.style.position = '';
      document.body.style.top = '';
      window.scrollTo(0, parseInt(scrollY || '0') * -1);

      searchAnim(false);
      setTimeout(() => {
        searchContainer.style.display = 'none';

      }, 100);
    }
  };

  searchBtn.addEventListener('click', () => {
    search = !search;
    searchModal();
  });

  searchExitBtn.addEventListener('click', () => {
    search = !search;
    searchModal();
  });

});

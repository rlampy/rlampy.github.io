// clickable hamburger menu
function navClick() {
    var navlist = document.getElementById('navlist');
    if (navlist.style.display === 'block') {
      navlist.style.display = 'none';
    } else {
      navlist.style.display = 'block';
    }
  }
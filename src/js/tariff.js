try {
  const tariffItem = document.querySelector('.nav-link--tab--tariff');

  const tariffTabItem = document.querySelector('.tariff-tab');

  const tariffItems = document.querySelectorAll('.nav-link--tab--tariff');

  const tariffTabItems = document.querySelectorAll('.tariff-tab');

  tariffItem.classList.add('active');

  tariffTabItem.classList.add('active');

  tariffItems[0].addEventListener('click', () => {
    tariffTabItems[0].classList.add('active');
    tariffTabItems[1].classList.remove('active');
    tariffTabItems[2].classList.remove('active');
  });

  tariffItems[1].addEventListener('click', () => {
    tariffTabItems[0].classList.remove('active');
    tariffTabItems[1].classList.add('active');
    tariffTabItems[2].classList.remove('active');
  });

  tariffItems[2].addEventListener('click', () => {
    tariffTabItems[0].classList.remove('active');
    tariffTabItems[1].classList.remove('active');
    tariffTabItems[2].classList.add('active');
  });
} catch (e) {
  console.log(e);
}

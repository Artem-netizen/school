document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelector('.tabs');
    const tabsBtn = document.querySelectorAll('.tabs__btn');
    const tabsContent = document.querySelectorAll('.tabs__content');

    let activeBtn = document.querySelector('.tabs__btn--active');
    let activeParent = activeBtn.closest('.tabs__item');
    let previousParent = activeParent.previousElementSibling;

    if (tabs) {
        tabs.addEventListener('click', (e) => {
            if (e.target.classList.contains('tabs__btn')) {
                const tabsPath = e.target.dataset.tabsPath;
                tabsHandler(tabsPath);
            }
            if (previousParent) {
                tabsBtn.forEach(el => {
                    el.classList.remove('tabs__btn--active')
                });
                previousParent.querySelector('.tabs__btn').classList.add('tabs__btn--active');
            }
        });
    }
    const tabsHandler = (path) => {
        tabsBtn.forEach(el => {
            el.classList.remove('tabs__btn--active')
        });
        document.querySelector(`[data-tabs-path="${path}"]`).classList.add('tabs__btn--active');


        tabsContent.forEach(el => {
            el.classList.remove('tabs__content--active')
            document.querySelector(`[data-tabs-target="${path}"]`).classList.add('tabs__content--active');
        });
    };
});
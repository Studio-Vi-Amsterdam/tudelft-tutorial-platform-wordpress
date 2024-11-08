export function readingTime() {
    let summaryTime = 0;

    if (document.querySelector('.tutorial__item')) {
        document.querySelectorAll('.tutorial__item').forEach(chapter => {
            let chapterTime = 0
            const data = chapter.dataset.tabContent
            chapter.querySelectorAll('.tutorial__content').forEach((subchapter, index) => {
                if(!subchapter.classList.contains('tutorial__btns')) {
                    const text = subchapter.innerText;
                    const wpm = 225;
                    const words = text.trim().split(/\s+/).length;
                    const time = Math.ceil(words / wpm);
                    const wrapper = document.querySelector(`[data-tab-target="${data}"]`).nextElementSibling
                    if( wrapper.querySelector(`li`) && wrapper.querySelectorAll(`li`)[index]) {
                        wrapper.querySelectorAll(`li`)[index].innerHTML += `<span>${time} min</span>`
                    chapterTime += time;
                    }

                }

            })
            if(chapterTime === 0) {
                chapterTime = 1
            }
            document.querySelector(`[data-tab-target="${data}"]`).innerHTML += `<span>${chapterTime} min</span>`
            summaryTime += chapterTime;
        });
        document.querySelector('.tutorial__nav h4').innerHTML += `<span>${summaryTime} min</span>`
    } else {
        console.log('No tutorial items found.');
    }
}
 
export function readingTime() {
    let summaryTime = 0;

    if (document.querySelector('.tutorial__item')) {
        document.querySelectorAll('.tutorial__item').forEach(chapter => {
            const data = chapter.dataset.tabContent
            const text = chapter.innerText;
            const wpm = 225;
            const words = text.trim().split(/\s+/).length;
            const time = Math.ceil(words / wpm);
            document.querySelector(`[data-tab-target="${data}"]`).innerHTML += `<span>${time} ${time > 1 ? 'mins read' : 'min read'}</span>`
            summaryTime += time;
        });
        document.querySelector('.tutorial__nav h4').innerHTML += `<span>${summaryTime} ${summaryTime > 1 ? 'mins read' : 'min read'}</span>`
    } else {
        console.log('No tutorial items found.');
    }
}
 
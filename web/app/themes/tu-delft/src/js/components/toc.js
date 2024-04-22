export function tabOfContent() {
    if(document.querySelector('[data-toc-wrapper]')){
        document.querySelectorAll('[data-toc-wrapper]').forEach((parent, index) => {
            const TOC = parent.querySelector('.js-toc')
            const data = parent.querySelector('[data-tab-target]').dataset.tabTarget
            const contentForToc = document.querySelector(`[data-tab-content="${data}"]`)
            if(contentForToc != null && TOC != null){
                let headings = contentForToc.querySelectorAll('h4'),
                    parentLevel = 1,
                    cursorNode = TOC;
        
                if(headings.length) {
                    for (let i = 0, len = headings.length ; i < len ; ++i) {
                        const currentHeading = headings[i];
                        const newLevel = parseInt(currentHeading.tagName.substr(1,1));
                        let diff = newLevel - parentLevel;
                        
        
                        const liNode = document.createElement('LI');
                        if (!currentHeading.hasAttribute('id')) {
                            currentHeading.id = 'h' + i + index;
                        }
                        const link = document.createElement('A');
                        link.setAttribute('href', '#' + currentHeading.getAttribute('id'));
    
                        if(currentHeading.textContent.length > 25) {
                            link.appendChild(document.createTextNode(currentHeading.textContent.slice(0,25) + '...'))
                        }   else {
                            link.appendChild(document.createTextNode(currentHeading.textContent))
                        } 
                        
                        liNode.appendChild(link);
                        cursorNode.appendChild(liNode);
                    }
                }
      
            }

        })
    }

}
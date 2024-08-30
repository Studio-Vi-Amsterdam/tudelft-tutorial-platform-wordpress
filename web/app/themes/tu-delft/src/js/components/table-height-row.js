export function tableHeightRow() {
    if(document.querySelector('.table')) {
        document.querySelectorAll('.table').forEach(table => {
            const rows = table.querySelectorAll('tr')
            rows.forEach(row => {
                if(row.querySelectorAll('td')[1].clientHeight > row.querySelector('td').clientHeight) {
                    row.querySelector('td').style.height = row.querySelectorAll('td')[1].clientHeight + 1 + 'px'
                    row.style.height = row.clientHeight + 1 + 'px'
                } else {
                    row.style.height = row.querySelector('td').clientHeight + 1 + 'px'
                    row.querySelector('td').style.height = row.querySelector('td').clientHeight + 1 + 'px'
                }
            })
        })

    }
}
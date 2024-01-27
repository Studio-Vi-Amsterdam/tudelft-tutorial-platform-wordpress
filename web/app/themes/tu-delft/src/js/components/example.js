export function example() {
    // TO BE IMPLEMENTED
    // listen for ajax requests
    $(document).ajaxSend(function (event, xhr, settings) {
        const action = settings.data.split('&').find((item) => item.includes('action')).split('=')[1];
        
        if (action === 'query-attachments') {
            
        }
    })
}
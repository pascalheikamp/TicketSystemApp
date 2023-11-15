let httpRequest;

document.querySelector('.toggle').addEventListener('change', ()=> {
    let status = this.prop('checked') == true ? 1 : 0;
    let ticket_id = this.data('id');

    const data = {
        'status': status,
        'ticket_id': ticket_id
    }
    makeRequest('admin/update/status', data)
})


function makeRequest(url, data) {
    httpRequest = new XMLHttpRequest();

    if(!httpRequest) {
        console.log('cannot create XMLHTTP instance')
        return false
    }
    // httpRequest.onreadystatechange = alertContents;
    httpRequest.open("POST", url)
    httpRequest.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
    );
    httpRequest.send(`data=${encodeURIComponent(data)}`)
    httpRequest.success(
        console.log()
    )
}

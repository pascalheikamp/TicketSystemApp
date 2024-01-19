let httpRequest;

const closeButton = document.getElementById("closeButton");
const popupMessage = document.querySelector('.popUp-message');
closeButton.addEventListener('click', () => {
   console.log("Hello")
})

let toggleButtons = document.querySelectorAll('.toggle');

for (let i=0; i < toggleButtons.length; i++) {
    toggleButtons[i].addEventListener('change', (e) => {

        let status = e.target.checked === true ? 1 : 0;
        let ticket_id = e.target.dataset.id;

        const data = {
            'status': status,
            'ticket_id': ticket_id
        }

        fetch("/admin/update/status/", {

            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'url': '/admin/update/status/',
                'X-CSRF-Token': document.querySelector('input[name=_token]').value
            },

            body: JSON.stringify({
                "nonFilteredUser": ticket_id,
                "status": status
            })
        }).then(r => r.json()).then(res => changeToggle(res))
            .catch((err) => {
                console.log('Error: ', err)
            })

        function changeToggle(data) {
            // const currentStateElement = document.getElementById("currentState");
            // currentStateElement.textContent = "Current State: " + data.state;
            console.log("success " + data.success)
        }
    })
}



// function makeRequest(url, data) {
//     httpRequest = new XMLHttpRequest();
//
//     if(!httpRequest) {
//         console.log('cannot create XMLHTTP instance')
//         return false
//     }
//     // httpRequest.onreadystatechange = alertContents;
//     httpRequest.open("POST", url)
//     httpRequest.setRequestHeader(
//         "Content-Type",
//         "application/x-www-form-urlencoded"
//     );
//     httpRequest.send(`data=${encodeURIComponent(data)}`)
//     httpRequest.success(
//         console.log()
//     )
// }

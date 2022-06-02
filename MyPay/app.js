const btnDepo = document.getElementById('btnDepo');
const btnSend = document.getElementById('btnSend');
const close = document.querySelectorAll('.close');

btnDepo.addEventListener('click', () =>{
    setTimeout(()=>{
        document.getElementById('deposit').style.display='none';
        document.getElementById('send').style.display='none';
    }, 150)
})
btnSend.addEventListener('click', (e) =>{
    setTimeout(()=>{
        document.getElementById('send').style.display='block';
        document.getElementById('deposit').style.display='none';
    }, 150)
})
close.forEach(item => {
    item.addEventListener('click', () => {
        document.getElementById('send').style.display='none';
        document.getElementById('deposit').style.display='none';
    })
})
// setTimeout(() =>{
//     document.querySelector('.feedbacks').style.display = 'none';
// }, 3000)
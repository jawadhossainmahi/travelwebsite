function setInputMessage(inputElement, message) {
  const elements = inputElement.parentElement.lastElementChild
  elements.classList.add = 'wrong__input__message'
  inputElement.style.color = 'red'
  inputElement.style.border = '2px solid red'
  elements.innerText = message
}

function clearInputMessage(inputElement, message) {
  const elements = inputElement.parentElement.lastElementChild
  elements.classList.remove = 'wrong__input__message'
  inputElement.style.color = 'var(--lignt-black)'
  inputElement.style.border = 'var(--border)'
  elements.innerText = message

}


document.addEventListener('DOMContentLoaded', () => {


  let form = document.getElementById('form');
  let input = document.querySelectorAll('input');
  let action = false

  input.forEach(inputElement => {
    inputElement.addEventListener('blur', (r) => {
      if (r.target.id == "name" && r.target.value.length > 0 && r.target.value.length < 10) {
        setInputMessage(inputElement, 'Your username must contain 10 character')
      }
      else if (r.target.id === "email" && r.target.value.length > 0 && r.target.value.length < 10) {
        setInputMessage(inputElement, 'please input a valid email')
      }
      else if (r.target.id === "guest" && r.target.value == '') {
        setInputMessage(inputElement, 'please input actula number of guest')
      }
      else if (r.target.value == '' || r.target.value.length > 0 && r.target.value.length < 5) {
        setInputMessage(inputElement, 'please fill the info with valid information')
      }
      else {
        inputElement.addEventListener('input', (r) => {
          clearInputMessage(inputElement, null)
        })
        form.setAttribute('action', 'book_form.php')

      }
    })

  })
})
  let alert_btn = document.querySelector('#alert_btn')
  let parent = document.querySelector('.msg')
  alert_btn.addEventListener('click',(e)=>{
 parent.setAttribute('class', 'displaying')
  })






// console.log('error');
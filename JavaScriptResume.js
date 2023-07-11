let body = document.querySelector('body')

let tableElem = document.querySelectorAll('table')

let h1h=document.querySelector('h1')

let darkbutton=document.querySelector('button')

let darkinput =document.querySelectorAll('input')

let darkselect=document.querySelectorAll('select')
//++++++++++++++++++++++++++++++++++++++++++++++
function toggleDarkMode(){
  body.classList.toggle('dark-mode')

  tableElem.forEach(function(table){
    table.classList.toggle('dark-table')
  })

  h1h.classList.toggle('dark-h1')

  darkbutton.classList.toggle('dark-button')
  
  darkinput.forEach(function (input){
    input.classList.toggle('dark-input')
  })

  darkselect.forEach(function (select){
    select.classList.toggle('dark-select')
  })
}

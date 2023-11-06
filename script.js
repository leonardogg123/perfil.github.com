const loginsec=document.querySelector('.login-section')
const loginlink=document.querySelector('.login-link')
const registerlink=document.querySelector('.register-link')
registerlink.addEventListener('click',()=>{
    loginsec.classList.add('active')
})
loginlink.addEventListener('click',()=>{
    loginsec.classList.remove('active')
})

/*Essencialmente, esse código permite alternar entre as seções de login e registro em uma página da web quando os links correspondentes são clicados, alterando a visibilidade da seção de login */
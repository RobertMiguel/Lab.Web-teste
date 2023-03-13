// Bloquear Inputs de Nomes

const nomeAluno = document.querySelector('#nome')
nomeAluno.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode ? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})

const filiacaoPai = document.querySelector('#filiacaoPai')
filiacaoPai.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})

const filiacaoMae = document.querySelector('#filiacaoMae')
filiacaoMae.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})

// Bloquear Inputs de Profissões

const proPai = document.querySelector('#proPai')
proPai.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})

const proMae = document.querySelector('#proMae')
proMae.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})

// Bloquear Inputs de Localização (Alguns)

const bairro = document.querySelector('#bairro')
bairro.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})

const municipio = document.querySelector('#municipio')
municipio.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})

const naturalidade = document.querySelector('#naturalidade')
naturalidade.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})

const nacionalidade = document.querySelector('#nacionalidade')
nacionalidade.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})

const endereco = document.querySelector('#endereco')
endereco.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})

// Bloquear Outros

const outra = document.querySelector('#outra')
outra.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})

const responsavelTransporte = document.querySelector('#responsavelTransporte')
responsavelTransporte.addEventListener('keypress',(e)=> {
    const keyCode = (e.keyCode? e.keyCode : e.wich)
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault()
    }
})






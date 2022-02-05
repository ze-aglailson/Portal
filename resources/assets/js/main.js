window.addEventListener('load', function(){
    const cabecalho = document.querySelector('.container-cabecalho')
    var alturaCabecalho = cabecalho.offsetHeight
    var posicaoScrollAtual = 0
    let mainPrincipal = document.querySelector('.main-principal')

    mainPrincipal.style.paddingTop = alturaCabecalho+'px'

window.addEventListener('resize', function(){
    alturaCabecalho = cabecalho.offsetHeight
    mainPrincipal.style.paddingTop = alturaCabecalho+'px'
    console.log('foi')
})

//Eventos de scroll
window.addEventListener('scroll', function(){

    
    posicaoScrollAtual = window.scrollY

    voltaTopo(posicaoScrollAtual)

})


//FUNÇÕES

function voltaTopo(posicaoScrollAtual){

    let btn = document.querySelector('.btn-volta-top')

    if(posicaoScrollAtual > (100/(1/2))){

        btn.classList.add('btn-volta-top-visivel')

        btn.addEventListener('click', function(){

            window.scrollTo({
                top:0 - alturaCabecalho,
                left:0,
                behavior:'smooth'
            })

        })

    }else{
        btn.classList.remove('btn-volta-top-visivel')
    }

}

})
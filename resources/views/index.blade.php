

 
 
@include("components.header")

<div class="container-home">
    <div class="fundo-home">
    <h1 class="titulo-home">Study and Learn for Free With Our Courses</h1>
    <a href="{{ asset('../courses') }}" class="btn-home"><button class="botao" ID="btn-home">Enroll</button></a>
    </div>
 <img class="img-home"src="{{ asset('img/React Native Code Image (1).png') }}">
</div>


<div class="corpo-home">
    <H6 class="titulo-corpo">Our Courses</H6>
    <div>
        <div class="caixa-texto">
            <p class="titulo-cursos">Database</p>
        </div>
        <div class="caixa-img">
         <img class="img-cursos" src="{{ asset('img/Wallpaper – Back-End I.png') }}">
        </div>

        <div>
        <div class="caixa-texto">
            <p class="titulo-cursos">Front-End</p>
        </div>
        <div class="caixa-img">
         <img class="img-cursos" src="{{ asset('img/Wallpaper – Front-End I.png') }}">
        </div>
    </div>
</div>
</div>


 @include("components.footer")
   

 
   

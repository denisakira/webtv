@extends('layouts.master')

@section('content')
{{-- <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Operações" alt="Card image cap">
                        
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="/operacao" role="button">
                                        Sistema
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Produção" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="/producao" role="button">
                                        Sistema
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>   --}}

<h1 class="text-center display-3">
    Sistema FAAC webTV
</h1>

<div class="container">

    <!--Card group-->
    <div class="card-deck">
    
        <!--Card-->
        <div class="card mb-4">
    
            <!--Card image-->
            <div class="view overlay">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <!--Card image-->
    
            <!--Card content-->
            <div class="card-body">
    
                <!--Title-->
                <h4 class="card-title">Produção</h4>
    
                <!--Text-->
                <p class="card-text"></p>
    
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <a href="/admin/eventos" type="button" class="btn btn-blue btn-md">Eventos</a>
            </div>
            <!--Card content-->
    
        </div>
        <!--Card-->
    
        <!--Card-->
        <div class="card mb-4">
    
            <!--Card image-->
            <div class="view overlay">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <!--Card image-->
    
            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <h4 class="card-title">Operações</h4>
    
                <!--Text-->
                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
    
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <a href="/operacao" type="button" class="btn btn-blue btn-md">Equipamentos</a>
            
                <a href="/qrgen" type="button" class="btn btn-blue btn-md">Gerador QR</a>
            </div>
            <!--Card content-->
    
        </div>
        <!--Card-->
    
        <!--Card-->
        <div class="card mb-4">
    
            <!--Card image-->
            <div class="view overlay">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <!--Card image-->
    
            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <h4 class="card-title">Card title</h4>
    
                <!--Text-->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-light-blue btn-md">Read more</button>
            </div>
            <!--Card content-->
    
        </div>
        <!--Card-->
    
    </div>
    <!--Card group-->
</div>

@endsection

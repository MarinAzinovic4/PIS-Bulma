@extends('layouts.app')

@section('pageTitle', 'Katalog')

@section('content')

<div>
<br/>
<br/>
<br/>
    
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-half">
                        <form class ="box">

                            <div class="field">
                                <figure class="image is-3by2 is-centered">
                                    <img src="img/mrkva.jpg">
                                </figure>
                            </div>

                            <div class="field ">
                              <label for="" class="label">Naziv</label>
                              <p class="has-background-light">Mrkva</p>
                            </div>

                            <div class="field ">

                                <label for="" class="label">Cijena</label>
                                <p class="has-background-light">2KM/KG</p>
                            </div>

                            <div class="field ">
                                <label for="" class="label">Kratki opis</label>
                                <p class="has-background-light">Povrće</p>
                            </div>

                            <div class="field ">
                              <label for="" class="label">Da li je Artikl in Stock</label>
                              <p class="has-background-light">In Stock</p>
                          </div>

                            <div class="field ">
                                <label for="" class="label">Detaljni opis:</label>
                                <p class="box"> 
                                    Pripadnici roda imaju pretežno dvospolne cvjetove. Sije se u rano proljeće, te tijekom ljeta i jeseni naraste 20–40 cm u visinu, a cvjeta tek sljedeće godine.
                                    Mrkva se koristi svježa, kuhana, konzervirana, sjeckana suha (kao začin). U Portugalu se od mrkve pravi specijalitet u obliku džema.
                                    <br /><br /> </p>
                            </div>

                            <div class="field">
                                <p class="control">
                                  <button class="button is-success ">
                                    Preplati se na Artikl
                                  </button>
                                  <button class="button is-danger is-pulled-right">
                                    Natrag
                                  </button>
                                  <button class="button mr-1 is-info is-pulled-right">
                                    Edit
                                  </button>
                                </p>
                              </div>
                              <div class="field">
                                <p class="control">
                                  <button class="button is-success is-fullwidth">
                                    Primjeni Kupon
                                  </button>
                                </p>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

@extends('layouts.app')

@section('pageTitle', 'Katalog')

@section('content')

<div>
    
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-half">
                        <form class ="box">

                            <div class="field ">
                              <label for="" class="label">Ime i Prezime</label>
                              <p class="has-background-light">Jozo Jozić</p>
                            </div>

                            <div class="field ">

                                <label for="" class="label">Email</label>
                                <p class="has-background-light">jozojozić77@gmail.com</p>
                            </div>

                            <div class="field ">
                                <label for="" class="label">Telefon</label>
                                <p class="has-background-light">Nije postavljen</p>
                            </div>

                            <div class="field ">
                                <label for="" class="label">Naslov</label>
                                <p class="has-background-light">Pitanje za produkt</p>
                            </div>


                            <div class="field ">
                                <label for="" class="label">Poruka:</label>
                                <p class="box"> 
                                    Pripadnici roda imaju pretežno dvospolne cvjetove. Sije se u rano proljeće, te tijekom ljeta i jeseni naraste 20–40 cm u visinu, a cvjeta tek sljedeće godine.
                                    Mrkva se koristi svježa, kuhana, konzervirana, sjeckana suha (kao začin). U Portugalu se od mrkve pravi specijalitet u obliku džema.
                                    <br /><br /> </p>
                            </div>

                            <div class="field">
                                <p class="control">
                                  <button class="button is-success ">
                                    Označi kao pročitano
                                  </button>
                                  <button class="button is-danger is-pulled-right">
                                    Natrag
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
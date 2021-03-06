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

                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                  <label class="label">Od</label>
                                </div>
                                <div class="field-body">
                                  <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                      <input class="input" type="text" placeholder="Ime">
                                      <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                      </span>
                                    </p>
                                  </div>
                                  <div class="field">
                                    <p class="control is-expanded has-icons-left has-icons-right">
                                      <input class="input" type="text" placeholder="Prezime">
                                      <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                      </span>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Telefon</label>
                                </div>
                                <div class="field-body">
                                  <div class="field is-expanded">
                                    <div class="field has-addons">
                                      <p class="control">
                                        <a class="button is-static">
                                          +387
                                        </a>
                                      </p>
                                      <p class="control is-expanded">
                                        <input class="input" type="tel" placeholder="Unesite va?? broj telefona">
                                      </p>
                                    </div>
                                    <p class="help">NAPOMENA: Broj telefona nije obavezan.</p>
                                  </div>
                                </div>
                              </div>



                              <div class="field is-horizontal">
                                
                                <div class="field-label is-normal">
                                        <label class="label">Email</label>
                                </div>
                                
                                <div class="field-body">
                                  <div class="field is-expanded">
                                    <div class="field has-addons">
                                      <p class="control is-expanded is-expanded has-icons-left has-icons-right">
                                        <input class="input" type="email" placeholder="Unesite va??u email adresu">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              
                            
                              
                              <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                  <label class="label">Naslov</label>
                                </div>
                                <div class="field-body">
                                  <div class="field">
                                    <div class="control">
                                      <input class="input" type="text" placeholder="Unesite naslov ovdje">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                  <label class="label">Poruka</label>
                                </div>
                                <div class="field-body">
                                  <div class="field">
                                    <div class="control">
                                      <textarea class="textarea" placeholder="Unesite poruku ovdje"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="field is-horizontal">
                                <div class="field-label">
                                  
                                </div>
                                <div class="field-body">
                                  <div class="field">
                                    <div class="control">
                                      <button class="button is-primary">
                                        Po??alji
                                      </button>
                                      <button class="button is-danger is-pulled-right">
                                        <a href="index.html">Natrag</a>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>  

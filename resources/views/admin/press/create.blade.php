@extends('admin.layouts.master')

@section('content')

  <section class="main">
      <div class="container">           
        <h1>Aggiungi progetti</h1>
        <h2> In questa sezione puoi aggiungere progetti al sito.</h2>
        <form action="/admin/progetti" method="POST">
        <div class="card card-add-project">
        
          <div class="card-body">
            {{csrf_field()}}
              <div class="row">
                <div class="col-md-12">
                  <h3>Titolo progetto</h3>
                  <div class="input-material">
                    <label for="" class="label-material"></label>
                    <input type="text" name="name" placeholder="Inserisci il titolo del progetto" class="input-field-material" required title="Questo campo non puo essere vuoto." x-moz-errormessage="Questo campo non puo essere vuoto.">
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="centered">
          <button type="submit" class="btn btn-green">Salva</button>
          <div class="btn btn-orange">Abbandona</div>
        </div>
        </form>
      </div>
    </section>
    @stop
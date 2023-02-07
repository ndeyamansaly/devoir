<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoir</title>
</head>
<body class="bg-dark">
<center>
    <div class="btn btn-secondary" >
 <h1> FORMULAIRE</h1>
</div>
<div class="container py-6">

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('etudiant') }}</div>

              <div class="card-body">
                <form  action="etudiant" id="contactForm" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row mb-3">
                          <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('prenom') }}</label>

                          <div class="col-md-6">
                              <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="row mb-3">
                          <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('nom') }}</label>

                          <div class="col-md-6">
                              <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="semestre" class="col-md-4 col-form-label text-md-end">{{ __('semestre') }}</label>

                          <div class="col-md-6">
                            
                              <input id="semestre" type="hidden" class="form-control @error('matiere') is-invalid @enderror" name="semestre_id" value="" required autocomplete="name" autofocus>

                              @error('semestre')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="row mb-3">
                        <label for="matiere" class="col-md-4 col-form-label text-md-end">{{ __('matiere') }}</label>

                        <div class="col-md-6">
                            <input id="matiere" type="hidden" class="form-control @error('matiere') is-invalid @enderror" name="matiere_id" value="{{ old('tel') }}" required autocomplete="name" autofocus>

                            @error('datefin')
                                <span class="invalid-feedback" tel="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                          <label for="note" class="col-md-4 col-form-label text-md-end">{{ __('note') }}</label>

                          <div class="col-md-6">
                              <input id="note" type="text" class="form-control @error('note') is-invalid @enderror" name="note" value="{{ old('note') }}" required autocomplete="name" autofocus>

                              @error('note')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                       </div>
                      <div class="row mb-3">
                          <label for="examen" class="col-md-4 col-form-label text-md-end">{{ __('examen') }}</label>

                          <div class="col-md-6">
                              <input id="examen" type="text" class="form-control @error('matiere') is-invalid @enderror" name="examen" value="{{ old('examen') }}" required autocomplete="name" autofocus>

                              @error('semestre')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                     
                      <div class="row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-secondary" cursor="pointer" color="#eeeeee" >
                                  {{ __('enregistrer') }}

                              </button>
                                      
                          </div>
                         
                      </div>
                     
                  </form>
              </div>
          </div>
      </div>
  </div>
</div> <br>

<center class="btn btn-primary"><h1>Liste des etudiants</h1></center>

               


<table class="table"   >
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">prenom</th>
                        <th scope="col">nom</th>
                        <th scope="col">matiere</th>
                        <th scope="col">note</th>
                        <th scope="col">examen</th>
                        <th scope="col">semestre</th>

                     
                        

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($etudiant as $m)
                    
                      <tr>
                       
                       
                        
                        <th scope="row">@php echo $m->id @endphp</th>
                        <td>@php echo $m->prenom @endphp</td>
                        <td>@php echo $m->nom @endphp</td>
                        <td>@php echo $m->matiere_id @endphp</td>
                        <td>@php echo $m->note @endphp</td>
                        <td>@php echo $m->examen @endphp</td>
                        <td>@php echo $m->semestre_id @endphp</td>
                       
                        
                         
                         {{-- <input type="hidden" value="{{ $m->id }}" name="iduser"> --}}
                         <td>
                        
                       
                    </td>
                    </form>
                      <!-- <form action="/supprimerprojet"method="POST">
                        @csrf 
                       <input type="hidden" value="{{ $m->id }}" name="idprojet"> 
                       <td><button name="delete" class="button btn btn-danger">supprimer</button></td>
                      </form> -->
                      </tr>
                    
                   
                    @endforeach
                    </tbody>
                  
                  </table>



</body>
</html>
    
</body>
</html>
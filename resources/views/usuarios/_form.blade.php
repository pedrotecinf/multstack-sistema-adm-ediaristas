@csrf
<div class="card">
    <div class="card-body">
   
        <fieldset>
            <legend>Novo Usuario</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nome de usuarios</label>
                        <input value="{{ old('name ',$usuario->name ?? '' )  }}" type="input" required
                            class="form-control" name="name" 
                            id="name" placeholder="Digite o nome do Usuario">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">email</label>
                        <input value="{{ old('email', $usuario->email?? '')}}" type="email" required
                            class="form-control" name="email" 
                            placeholder="Digite o email do Usuario">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input value="{{ old('password', '')  }}" type="password" required
                            class="form-control" name="password" 
                            id="password" placeholder="Digite a senha do Usuario">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password_confirmation">Confimar senha</label>
                        <input value="{{ old('password_confirmation', '')  }}" type="password" required
                            class="form-control" name="password_confirmation" 
                            placeholder="Confirme a senha do Usuario">
                    </div>
                </div>
            </div>

        </fieldset>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</div>

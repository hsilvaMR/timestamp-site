@section('modal')
{{-- modal login box  Acesso --}}
<div class="modal fade" id="boxModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded-0 modal-dialog-centered">
        <div class="modal-content modal-login">
            {{-- btn close --}}
            <div class="d-flex justify-content-end mt-2 me-3">
                <button type="button" class="btn-close btn-fechar" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- title --}}
            <div class="modal-header border-0 ">
                <h5 class="modal-title title-font" id="exampleModalLabel">ACESSO</h5>
            </div>
            {{-- body --}}

            <div class="modal-body">
                <div class="d-flex flex-column bd-highlight mb-3 box-fields">
                    <form id="formLogin" action="{{route('loginValidation')}}" name="formLogin" method="POST">
                        @csrf
                        <div class="p-2 bd-highlight fields-font">
                            <label for="">EMAIL</label><br>
                            <input type="text" id="fmail" value="{{ old('femail')}}" name="femail" class="py-2">
                            <label for="text-danger text-center">
                                {{$errors->has('femail')? $errors->first('femail') : ''}}
                            </label>
                        </div>
                        <div class="p-2 bd-highlight  fields-font">
                            <label for="">PASSWORD</label><br>
                            <input type="text" id="fpass" value="{{ old('fpassword')}}" name="fpassword" class="py-2">
                            <label for="text-danger text-center">
                                {{$errors->has('fpassword')? $errors->first('fpassword') : ''}}
                            </label>
                        </div>
                        <div class="p-2 bd-highlight text-center fields-font" data-bs-toggle="modal"
                            data-bs-target="#boxModalPassword">
                            <label for="" class="py-3" id="recoverPass">ESQUECEU A PASSWORD?</label><br>
                            <label for="" class="errorMessage text-danger d-none"></label>
                        </div>
                    </form>
                </div>
            </div>
            {{-- BTN REGISTAR |  ENTRAR --}}
            <div class="container-fluid">

                <div class="row  align-items-center">
                    <div class="col col-registar   d-flex justify-content-center" data-bs-toggle="modal"
                        data-bs-target="#boxModalRegister">
                        <span class="py-4">REGISTAR</span>
                    </div>
                    <div class="col col-entrar d-flex justify-content-center " id="btn-login">
                        <span class="py-4">ENTRAR</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- MODAL  | REGISTAR --}}
<div class="modal fade" id="boxModalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded-0 modal-dialog-centered">
        <div class="modal-content modal-registar">
            {{-- btn close --}}
            <div class="d-flex justify-content-end mt-2 me-3">
                <button type="button" class="btn-close btn-fechar" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- title --}}
            <div class="modal-header border-0 ">
                <h5 class="modal-title title-font" id="exampleModalLabel">REGISTO</h5>
            </div>
            {{-- body --}}
            <div class="modal-body">
                <div class="d-flex flex-column bd-highlight mb-3 box-fields">
                    <form id="formRegister" action="{{route('registerValidation')}}" name="formRegister" method="POST">
                        @csrf
                        {{-- nome --}}
                        <div class="p-2 bd-highlight fields-font">
                            <label for="">NOME</label><br>
                            <input type="text" id="fname" name="fnome" class="py-2">
                        </div>
                        {{-- apelido --}}
                        <div class="p-2 bd-highlight  fields-font">
                            <label for="">APELIDO</label><br>
                            <input type="text" id="fname" name="fapelido" class="py-2">
                        </div>
                        {{-- e-mail --}}
                        <div class="p-2 bd-highlight  fields-font">
                            <label for="">E-MAIL</label><br>
                            <input type="text" id="fname" name="fmail" class="py-2">
                        </div>
                        {{-- password --}}
                        <div class="p-2 bd-highlight  fields-font">
                            <label for="">PASSWORD</label><br>
                            <input type="text" id="fname" name="fpassword" class="py-2">
                        </div>
                        {{-- TERMOS --}}
                        <div class="p-2 bd-highlight  fields-font box-termos">
                            {{-- politica de privacidade   Li e aceito a "Politica de privacidade --}}
                            <input type="checkbox" id="RBprivacit" name="typeTermo" value="termo">
                            <label for="RBprivacit">Li e aceito a Politica de privacidade</label><br>

                            {{-- descontos --}}
                            <input type="checkbox" id="RBdescontos" name="typeTermo" value="desconto">
                            <label for="RBdescontos">Deseja receber os melhores descontos?</label>
                        </div>

                        <label for="" class="errorMessage text-danger d-none text-center py-1 pb-2"></label>

                        {{-- <button class="bt py-2 text-center" id="btntesLogin" type="submit">Criar Conta</button> --}}

                        <div class="p-2 bd-highlight text-center fields-font">
                            <label for="" class="py-3">ESQUECEU A PASSWORD?</label>
                        </div>

                    </form>
                </div>
            </div>
            {{-- BTN REGISTAR |  ENTRAR --}}
            <div class="container-fluid">

                <div class="row  align-items-center">
                    <div class="col col-registar  d-flex justify-content-center" id="btn-registar">
                        <span class="py-4">REGISTAR</span>
                    </div>
                    <div class="col col-entrar d-flex justify-content-center" data-bs-target="#boxModalLogin"
                        data-bs-toggle="modal">
                        <span class="py-4">ENTRAR</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

{{-- RECUPERAR A PASSWORD --}}
<div class="modal fade" id="boxModalPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded-0 modal-dialog-centered">
        <div class="modal-content modal-password">
            {{-- btn close --}}
            <div class="d-flex justify-content-end mt-2 me-3">
                <button type="button" class="btn-close btn-fechar" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- title --}}
            <div class="modal-header border-0 ">
                <h5 class="modal-title title-font" id="exampleModalLabel">RECUPERAR PASSWORD</h5>
            </div>
            {{-- body --}}
            <div class="modal-body">
                <div class="d-flex flex-column bd-highlight  box-fields">
                    <form id="formRecover" action="{{route('recoverPass')}}" name="formRecover" method="POST">
                        {{-- nome --}}
                        @csrf
                        <div class="p-2 bd-highlight fields-font">
                            <label for="">E-MAIL</label><br>
                            <input type="text" id="fmailRec" name="rCmail" class="py-2">
                        </div>
                    </form>
                    {{-- descricao --}}
                    <div class="p-2 bd-highlight text-center fields-font">
                        <label for="" class="py-3">ESQUECEU A PASSWORD?</label>
                    </div>
                </div>
            </div>
            {{-- BTN | RECUPERAR --}}
            <div class="container-fluid">
                <div class="row  align-items-center">
                    <div class="col col-recuperar  d-flex justify-content-center" id="btn-recoverPass">
                        <span class="py-4">RECUPERAR</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
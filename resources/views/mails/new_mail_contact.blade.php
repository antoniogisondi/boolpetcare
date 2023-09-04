<<<<<<< HEAD
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">New contact received to form <span style="color:blue">PetDesk</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>
                <strong style="color:red">You have received a new messsage</strong> <br>
                <strong>User</strong> {{ $lead->name }} <br>
                <strong>Email</strong> {{ $lead->email }} <br>
                <strong>Content</strong> {{ $lead->content }}
            </p>
        </div>
    </div>
</div>
=======
<h1>Nuova email</h1><br>
<p>
    <strong>Nome e Cognome: </strong>{{$lead->name}}<br>
    <strong>Email: </strong>{{$lead->email}}<br>
    <strong>Messaggio: </strong><br>
    {{$lead->content}}
</p>
>>>>>>> 753f53faf35b0a64ce89091f871c6bf441a97e94

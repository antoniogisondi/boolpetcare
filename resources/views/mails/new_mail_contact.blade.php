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
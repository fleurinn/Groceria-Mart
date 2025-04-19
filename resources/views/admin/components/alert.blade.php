<style>
    .success-message {
        background-color: #A7D477;
        color: white;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .error-message {
        background-color: #E52020;
        color: white;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
</style>

@if(session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="error-message">
        {{ session('error') }}
    </div>
@endif

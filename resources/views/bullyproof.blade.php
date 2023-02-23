@extends("layouts/app")

@section("title", "Gracie - Bullyproof")

@section("content")
    <section class="section">
        <h1 class="title">Generate Card with Barcode</h1>
        <form method="post" action="{{ route('gen') }}" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label" for="belt">Belt</label>
                <div class="select">
                    <select id="betl" name="belt">
                        <option value="-1" selected>Select one...</option>
                        <option value="Bullyproof_Green">Green</option>
                        <option value="Bullyproof_Orange">Orange</option>
                        <option value="Bullyproof_Yellow">Yellow</option>
                        <option value="Bullyproof_White_Green">White Green</option>
                        <option value="Bullyproof_White_Orange">White Orange</option>
                        <option value="Bullyproof_White_Yellow">White Yellow</option>
                        <option value="Bullyproof_Yellow_Green">Yellow Green</option>
                        <option value="Bullyproof_Yellow_Orange">Yellow Orange</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <label class="label" for="first_name">First Name</label>
                <div class="control">
                    <input class="input" type="text" name="first_name">
                </div>
            </div>

            <div class="field">
                <label class="label" for="last_name">Last Name</label>
                <div class="control">
                    <input class="input" type="text" name="last_name">
                </div>
            </div>

            <div class="field">
                <label class="label" for="id_number">ID Number</label>
                <div class="control">
                    <input class="input" type="text" name="id_number">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-primary" type="submit">Generate Card</button>
                </div>
            </div>
        </form>
    </section>

@endsection()

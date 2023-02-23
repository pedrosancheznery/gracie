@extends("layouts/app")

@section("title", "Gracie - Women's Empowerment")

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
                        <option value="Women_Empowered">Women Empowered</option>
                        <option value="Women_Empowered_Light">Women Empowered Light</option>
                        <option value="Gracie_Combatives_Official_Card">Gracie Combatives Official Card</option>
                        <option value="Gracie_Combatives_Transfer_Card">Gracie Combatives Transfer Card</option>
                    </select>
                </div>
            </div>
            {{-- <div class="field"> --}}
                {{-- <div class="control"> --}}
                    {{-- <button class="button is-primary" type="submit">Next</button> --}}
                {{-- </div> --}}
            {{-- </div> --}}
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
            {{-- <div class="field"> --}}
                {{-- <label class="label" for="file">Docx File</label> --}}
                {{-- <div class="control"> --}}
                    {{-- <input class="input" type="file" name="file"> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            <div class="field">
                <div class="control">
                    <button class="button is-primary" type="submit">Generate Card</button>
                </div>
            </div>
        </form>
    </section>

@endsection()

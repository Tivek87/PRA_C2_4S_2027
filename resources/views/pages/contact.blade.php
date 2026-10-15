<x-layouts.app>

    <x-slot:breadcrumb>
        <li><a href="/contact">Contact</a></li>
    </x-slot:breadcrumb>

    <h1>Contact</h1>

    <p>Heb je een vraag of opmerking? Neem gerust contact met ons op via het onderstaande formulier.</p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <form action="/contact" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="name">Naam:</label>
                    <input type="text" name="name" id="name" class="form-control" required placeholder="Vul je naam in">
                </div>

                <div class="form-group mb-3">
                    <label for="email">E-mailadres:</label>
                    <input type="email" name="email" id="email" class="form-control" required placeholder="naam@voorbeeld.nl">
                </div>

                <div class="form-group mb-3">
                    <label for="message">Bericht:</label>
                    <textarea name="message" id="message" rows="5" class="form-control" required placeholder="Typ hier je bericht..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Verstuur bericht</button>
            </form>
        </div>
    </div>

</x-layouts.app>


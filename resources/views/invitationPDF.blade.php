<link rel="stylesheet" href="{{ asset('css/ticket.css') }}">

<div id="pdfContent" class="flex flex-col">
    <section class="w-full flex-grow flex items-center justify-center p-4">
        <div class="flex w-full max-w-3xl text-zinc-900 h-64">
            <div class="h-full bg-slate-200	 flex items-center justify-center px-8 rounded-l-3xl">
                <div id="qrCode">
                    {{-- {!! QrCode::size(180)->generate(route('stagiaires.show', ['stagiaire' => $stagiaire->id])) !!} --}}
                    {!! QrCode::size(180)->generate('zefzef') !!}
                </div>
            </div>
            <div
                class="relative h-full flex flex-col items-center border-dashed justify-between border-2 bg-black border-white">
                <div class="absolute rounded-full w-8 h-8 bg-white -top-5"></div>
                <div class="absolute rounded-full w-8 h-8 bg-white -bottom-5"></div>
            </div>
            <div class="h-full px-10 bg-slate-200 flex-grow rounded-r-3xl flex justify-content-start flex-col">
                <div class="flex w-full mt-4 justify-between items-center">

                    <h1 id="title">Salon Régional de recrutement</h1>

                    <div class="flex flex-col items-start">
                        <img id="logo" src="{{ asset('img/logos/logo.png') }}" alt="">
                    </div>
                </div>
                <div class="d-flex flex-column ">
                    <h2 id="text" class="text-zinc-500">Location:</h2>
                    <span id="Location" class="font-mono">ISTA CFPMS (OFPPT) - Hay Hassani
                    </span>
                    <span class="font-mono">30 Novembre 2023 </span>
                </div>
                <div class="flex w-full mt-4 justify-between">
                    <div class="flex flex-col">
                        <span class="text-xs text-zinc-400">Nom Complet</span>
                        <span class="font-mono">{{ $stagiaire->prenom }}
                            {{ $stagiaire->nom }} </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xs text-zinc-400">CIN</span>
                        <span class="font-mono">{{ $stagiaire->cin }} </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xs text-zinc-400">Etablissement</span>
                        <span class="font-mono">ISGI</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xs text-zinc-400">filiere</span>
                        <span class="font-mono">{{ $stagiaire->filiere }} </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-5 offset"></div>
        <a class="col-3 w-full btn btn-success" onclick="generatePDF()">Telecharger</a>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>
<script>
    // function generatePDF() {
    //     var element = document.getElementById("pdfContent");
    //     html2pdf(element);
    // }
    function generatePDF() {
        var element = document.getElementById("pdfContent");
        html2pdf(element)
            .then(function(pdf) {
                // PDF generation successful, you can do something with the generated PDF
                // For example, you can open it in a new tab
                var blob = new Blob([pdf.output('blob')], {
                    type: 'application/pdf'
                });
                var url = URL.createObjectURL(blob);
                window.open(url, '_blank');
            })
            .catch(function(error) {
                // Handle errors that occurred during PDF generation
                console.error('Error generating PDF:', error);
            });
    }
</script>

<div class="contact-us section" id="contact">
    <div class="container">
        <div class="row">
            <!-- Teks Kontak -->
            <div class="col-lg-6 align-self-center">
                <div class="section-heading">
                    <h6>Kontak Kami</h6>
                    <h2>Hubungi Hijau Market</h2>
                    <p>Punya pertanyaan atau ingin memesan sayuran segar? Kirim pesan atau hubungi kami melalui form ini. Kami siap melayani!</p>
                </div>
            </div>

            <!-- Form Kontak -->
            <div class="col-lg-6">
                <div class="contact-us-content">
                    <form wire:submit.prevent="submit">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <input type="text" wire:model="name" placeholder="Nama Anda..." class="form-control">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12 mb-3">
                                <input type="text" wire:model="phone" placeholder="Nomor WhatsApp..." class="form-control">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12 mb-3">
                                <textarea wire:model="message" placeholder="Pesan Anda (misal: Mau beli Kangkung 2 ikat)" class="form-control"></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="orange-button">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>

                    <!-- Tombol WA langsung -->
                    <div class="mt-3">
                        <a href="https://wa.me/6289630318705" target="_blank" class="btn btn-success">
                            <i class="fa fa-whatsapp"></i> Chat via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

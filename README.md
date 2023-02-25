<h1>Bu proje bir laravel test case study projesidir.</h1>

<h3>Gereklilikler</h3>
<hr>
<ol>
<li>PHP min v.8</li>
<li>DB server (tavsiye edilen:MySQL)</li>
<li>composer min v.2</li>
<li>nodejs min v.18</li>
</ol>

<h3>Projeyi localde ayağa kaldırmak için izlenmesi gereken yol</h3>
<hr>
<p>Lütfen codeları proje klasörü içersinde yazdığınızdan emin olun 8)</p>
<ol>
<li><code>npm install</code></li>
<li><code>composer install</code></li>
<li><code>cp .env.example .env</code></li>
<li>Yeni bir database oluşturun.</li>
<li>.env dosyası içersindeki database bilgilerini girin.</li>
<li><code>php artisan migrate:fresh</code></li>
<li><code>php artisan key:generate</code></li>
<li><code>php artisan serve</code></li>
</ol>


<p> CSV dosyasını import etmeden önce en üst satıra Code headerını eklemeyi unutmayın!! </p>

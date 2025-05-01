<br>
<label class="custom-label" style="color:#fff">Sitenizi PWA uyumlu hale getirmek için lütfen aşağıdaki kodu kurulum temel dizininizdeki manifest.json dosyasına ekleyin. Sitenizin adı, URL'si veya renkleri gibi ayarlarını değiştirirseniz bu dosyayı güncellemeniz gerekecektir.</label>
<br>
<pre style="color:#fff">manifest.json:</pre>
<pre style="color:#fff">
{
  "name": "<?php echo get($Settings,'data.company', 'general');?>",
  "short_name": "<?php echo get($Settings,'data.company', 'general');?>",
  "start_url": "<?php echo APP;?>",
  "display": "standalone",
  "background_color": "#000",
  "theme_color": "#000",
  "description": "<?php echo get($Settings,'data.description', 'general');?>",
  "orientation": "any",
  "icons": [
    {
      "src": "<?php echo APP;?>/public/static/<?php echo get($Settings,'data.logo', 'general');?>",
      "type": "image/png", "sizes": "512x512"
    }
  ]
}
</pre>

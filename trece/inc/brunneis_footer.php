</article>

<div id="disqus_thread"></div>
<script>
  var disqus_config = function () {
    this.page.url = "<?=$conf["site"]["fullpath"];?>";  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = "<?=$conf["site"]["fullpath"];?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
  };
  (function () {
    var d = document, s = d.createElement('script');
    s.src = 'https://<?=substr($conf["contact"]["disqus"], 1);?>.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
  })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
    Disqus.</a></noscript>

</div>

<footer>
  <div id="footer">
    <p>Copyright &copy; 2019 Rodrigo Martínez Castaño. Powered by <a href="https://mini.trece.io" target="blank_">miniTRECE</a>.
  </div>
</footer>

<script id="dsq-count-scr" src="//<?=substr($conf["contact"]["disqus"], 1);?>.disqus.com / count.js" async></script>

</body>

</html>
<footer class="site-footer">
  <div class="container d-flex flex-column flex-md-row justify-content-between gap-2">
    <div>
      <div class="d-flex align-items-center gap-2">
        <img src="<?php echo esc_url(get_theme_file_uri('assets/novatech-logo.png')); ?>" class="footer-logo novatech-footer-logo" alt="<?php echo esc_attr__('NovaTech IT Support logo', 'pulsesync'); ?>">
        <div><strong>NovaTech Solutions | PulseSync</strong><div class="small">IT Support. In Sync.</div></div>
      </div>
    </div>
    <div class="small">
      <a class="footer-link" href="<?php echo esc_url(home_url('/#change-request')); ?>">Open change request form</a>
      · <a class="footer-link" href="<?php echo esc_url(get_theme_file_uri('assets/Change_Request_Form.pdf')); ?>" download>Download PDF form</a>
      <br>Student demonstration portal · Simulated ticket data.
    </div>
  </div>
</footer>
<div class="chat-launcher-wrap"><button id="chatLauncher" class="chat-launcher" aria-label="Open PulseSync AI Coach"><i class="bi bi-chat-dots-fill"></i><span>AI Coach</span></button></div>
<section id="chatWindow" class="chat-window" aria-label="PulseSync AI Coach" aria-live="polite">
  <div class="chat-header">
    <div class="bot-avatar"><i class="bi bi-robot"></i></div>
    <div class="flex-grow-1"><strong>PulseSync AI Coach</strong><div class="chat-online"><span></span> Online · simulated assistant</div></div>
    <button id="chatMinimize" class="chat-close" aria-label="Minimize chatbot"><i class="bi bi-dash-lg"></i></button>
    <button id="chatClose" class="chat-close" aria-label="Close chatbot"><i class="bi bi-x-lg"></i></button>
  </div>
  <div id="chatMessages" class="chat-messages"></div>
  <div id="chatQuickReplies" class="chat-quick-replies"></div>
  <form id="chatForm" class="chat-input-row"><input id="chatInput" class="form-control" placeholder="Describe your IT issue…" autocomplete="off" aria-label="Type your message"><button class="btn btn-primary" type="submit" aria-label="Send message"><i class="bi bi-send-fill"></i></button></form>
  <div class="chat-disclaimer">For common issues only. Never share passwords.</div>
</section>
<?php wp_footer(); ?>
</body>
</html>

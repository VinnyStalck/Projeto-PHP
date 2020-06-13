<?php

session_start();
# Limpa informação da sessão
session_unset();
# Termina sessão
session_destroy();

# Volta para página inicial
header("Location: ../index.php?sucesso=saida");
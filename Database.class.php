<?php
/**
 * Classe de conexão ao banco de dados usando PDO.
 * Modo de Usar:
 * require_once 'config/config.def.php'
 * 
 * @version 1.2
 * @example [ $db = Database::conexao(); ]
 */
class Database
{
    # conexão PDO.
    protected static $db;
    # criar um obj db
    private function __construct()
    {
        # Informações sobre o banco de dados:
        $db_host = HOST;
        $db_nome = SDBA;
        $db_usuario = USER;
        $db_senha = PASS;
        $db_driver = DRIVER;
        # Informações sobre o sistema:
        $sistema_titulo = 'Erro de conexao com o banco de dados';
        $sistema_email = EMAIL;
        try
        {
            # Atribui o objeto PDO à variável $db definida.
            self::$db = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha,
                    array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM));
            # Garante que o PDO lance exceções durante erros.
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            # Garante que os dados sejam armazenados com codificação UFT-8.
            self::$db->exec('SET NAMES utf8');
            
        }
        catch (PDOException $e)
        {
            # Envia um e-mail para o e-mail oficial do sistema, em caso de erro de conexão.
            mail($sistema_email, "PDOException em $sistema_titulo", $e->getMessage());
            # Informar uma pagina de erro.
            $pag_erro = "/erros/pdo.php"; #personalizado... crie o seu 404
            header('location: '.$pag_erro);
            
            die();
            //die("Connection Error: " . $e->getMessage());
        }
    }
    # Método estático - acessível sem instanciação.
    public static function conexao()
    {
        # Verificar instancia existente ou criar uma nova.
        if (!self::$db)
        {
            new Database();
        }
        # Retorna a conexão.
        return self::$db;
    }
}
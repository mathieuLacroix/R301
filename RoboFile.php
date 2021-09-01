<?php
/**
 * Fichier de configuration pour le task runner Robo (http://robo.li/) pour le module M3104
 * 
 * Définit 3 actions : 
 * - sql : crée les tables categories et nobels nécessaires pour les TP 2 et 3
 * - ecs : lance la commande easy coding standard avec une configuration spécifique
 * - sync : permet la synchronisation du répertoire de travail avec le répertoire public_html
 */


class RoboFile extends \Robo\Tasks
{
    /**
     * Crée les tables categories et nobels (les supprime avant si elles existent déjà)
     */
    public function sql($opts = ['sgbd' => 'psql', 'login' => null, "db" => "etudiants", "host" => "aquabdd"])
    {
        extract($opts);

        // Ask the password through the terminal
        $password = $this->askHidden("Database password?");

        // Set login to the username env variable if not defined
        $login = isset($login) ? $login : getenv('USERNAME');

        if ($sgbd == "psql") {
            $command = "PGPASSWORD=$password psql -U $login -d $db -h $host < sql/database_nobel_psql.sql";
        } else {
            $command = "$sgbd --user=$login --password=$password --host=$host $db < sql/database_nobel_mysql.sql";
        }

        $res = $this->taskExec($command)->silent(true)->run();
        if ($res->wasSuccessful()) {
            $this->say("Les tables categories et nobels ont été créées/réinitialisées !");
        }
    }

    /**
     * Lance l'outil EasyCodingStandard sur le fichier de code passé en paramètre ou sur les fichiers contenus dans le répertoire passé en paramètre
     *
     * @param [string] $fileOrDir fichier ou répertoire à tester
     * @param array $opts
     * @option $fix corrige automatiquement les erreurs détectées
     */
    public function check($fileOrDir = "web", $opts = ['fix' => false])
    {
        $cmd = 'ecs check ' . $fileOrDir . ($opts['fix'] ? " --fix" : "");
        $this->taskExec($cmd)->run();
    }

    /**
     * Synchronisation d'un Répertoire. Cela crée une copie conforme du répertoire dans $dest et met à jour automatiquement le répertoire en cas de modification.
     *
     * @param [string] $src répertoire à syncrhoniser (web par défaut)
     */
    public function sync($src = "web", $opts = ['dest' => null])
    {
        if (! is_dir($src)) {
            $this->say("commande : robo sync [origin] [dest]");
            return;
        }

        $dest = $opts['dest'] !== null ? $opts['dest'] : $_SERVER["HOME"] . "/public_html";


        $this->taskMirrorDir([$src => $dest])->run();

        $this->taskWatch()->monitor(
            $src,
            function () use ($src, $dest) {
                $this->taskMirrorDir([$src => $dest])->run();
            }
        )->run();
    }
}

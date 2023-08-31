# TP de programmation Web serveur R301 (IUT de Villetaneuse)

Ce dépôt contient les différents fichiers utiles pour réaliser les TP de la ressource *Programmation Web Serveur (R301)* dont le responsable est Mathieu Lacroix.

## Énoncés des TP

- [TP1](https://lipn.univ-paris13.fr/~lacroix/teaching/R301/TP/TP1/)
- [TP2](https://lipn.univ-paris13.fr/~lacroix/teaching/R301/TP/TP2/)
- [TP3](https://lipn.univ-paris13.fr/~lacroix/teaching/R301/TP/TP3/)

## Outils utilisés

- Pour programmer en PHP, il suffit d'avoir un serveur PHP et une base de données opérationnelle. Ceci peut être fait sur un ordinateur personnel en installant [LAMP](https://doc.ubuntu-fr.org/lamp) (linux), [WAMP](https://www.wampserver.com/) (windows) ou [MAMP](https://www.mamp.info/fr/downloads/) (Mac). Les ordinateurs ont déjà un serveur local d'installé.

- Pour coder, il faut un éditeur de texte. Celui conseillé est [Visual Studio Code](https://code.visualstudio.com/).

- On utilisera [Easy Coding Standard (`ecs`)](https://github.com/symplify/easy-coding-standard) pour vérifier la qualité du code.

- Pour faciliter le développement, on utilisera également le task runner (logiciel permettant d'exécuter les commandes les plus courantes de manière simple) [Robo](https://robo.li/). On se servira de Robo pour :
  - installer facilement les bases de données,
  - vérifier facilement la qualité du code avec `ecs`,
  - synchroniser son répertoire de code avec le répertoire du serveur local.

## Robo

### Synchronisation du répertoire (uniquement sur les ordinateurs de l'IUT)

Votre code doit être stocké dans votre répertoire de travail (`~/Bureau/Mes_Montages/$USER`) pour être sauvegardé d'une séance sur l'autre et il doit aussi être dans le répertoire `/home/$USER/public_html` (non sauvegardé) pour être accessible via le serveur local, c'est-à-dire accessible via `http://localhost/~VOTRE_NUMERO_ETUDIANT/chemin/nom_du_fichier`.

Pour éviter d'avoir plusieurs copies des fichiers, il est conseillé d'utiliser le task runner `robo`. L'action `sync` permet de copier vos fichiers php dans le répertoire `public_html` à chaque modification.

#### Initialisation de l'environnement de travail

Lors de la première séance, ouvrez un terminal et exécutez les commandes suivantes :

```bash
cd ~/Bureau/Mes_Montages/$USER
git clone https://github.com/mathieuLacroix/R301.git
```

#### Au début de chaque séance

Ouvrez un terminal et exécutez les commandes suivantes :

```bash
cd ~/Bureau/Mes_Montages/$USER/R301
code web/
robo sync
```
**Attention :** Il faut laisser `robo` s'exécuter tout au long de la séance. Vous devez donc laisser le terminal ouvert avec `robo sync` actif. 

**Attention :** Vous devez absolument mettre tous vos fichiers de code dans le répertoire `web`.


**Remarque :** il est possible de préciser un autre répertoire dans la commande. Par exemple, si le répertoire `web` contient le répertoire `tp1`, il est possible de synchroniser ce dernier avec `public_html` avec la commande :

```bash
robo sync web/tp1
```

### ECS

Pour vérifier la qualité du code d'un fichier ou d'un répertoire, il convient de taper la commande :

```bash
robo ecs [FICHIER OU RÉPERTOIRE]
```

Le logiciel indique les erreurs dans vos fichiers. Certaines peuvent être fixées automatiquement. Pour cela, il suffit d'ajouter dans la commande l'option `--fix`.

### Création de la base de données

Les TP2 et TP3 nécessite une base de données (tables categories et nobels). Un moyen simple de créer/remettre à zéro ces tables est d'utiliser la commande :

```bash
robo sql
```
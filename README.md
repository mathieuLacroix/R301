# TP de programmation Web serveur M3104 (IUT de Villetaneuse)

Ce dépôt contient les différents fichiers utiles pour réaliser les TP du module *Programmation Web Serveur (M3104)* dont le responsable est Mathieu Lacroix.

## Énoncés des TP

- [TP1](https://lipn.univ-paris13.fr/~lacroix/Ressources/WebS3/TP/TP1/)
- [TP2](https://lipn.univ-paris13.fr/~lacroix/Ressources/WebS3/TP/TP2/)
- [TP3](https://lipn.univ-paris13.fr/~lacroix/Ressources/WebS3/TP/TP3/)

## Outils utilisés

- Pour programmer en PHP, il suffit d'avoir un serveur PHP et une base de données opérationnelle. Ceci peut être fait sur un ordinateur personnel en installant [LAMP](https://doc.ubuntu-fr.org/lamp) (linux), [WAMP](https://www.wampserver.com/) (windows) ou [MAMP](https://www.mamp.info/fr/downloads/) (Mac). Les ordinateurs ont déjà un serveur local d'installé.

- Pour coder, il faut un éditeur de texte. Celui conseillé dans les salles de TP est [Atom](https://atom.io/). Sur un ordinateur personnel, préférer [Visual Studio Code](https://code.visualstudio.com/).

- On utilisera [Easy Coding Standard (`ecs`)](https://github.com/symplify/easy-coding-standard) pour vérifier la qualité du code.

- Pour faciliter le développement, on utilisera également le task runner (logiciel permettant d'exécuter les commandes les plus courantes de manière simple) [Robo](https://robo.li/). On se servira de Robo pour :
  - installer facilement les bases de données,
  - vérifier facilement la qualité du code avec `ecs`,
  - synchroniser son répertoire de code avec le répertoire du serveur local.

## Robo

### Synchronisation du répertoire (uniquement sur les ordinateurs de l'IUT)

Le présent dépôt doit être cloné dans votre répertoire de travail (`/home/student/905/NUMERO_ETUDIANT`) pour être sauvegardé. Par contre, pour que vos scripts PHP soient accessibles sur le serveur local, ils doivent se trouver dans le répertoire (non sauvegardé) `/home/NUMERO_ETUDIANT/public_html`. Pour éviter de faire une copie manuelle des fichiers dans le répertoire, on peut utiliser la commande :

```bash
robo sync
```

Le contenu du répertoire `web` (contenu dans le répertoire courant) est alors copié dans le répertoire accessible au serveur local. De plus, chaque fois que vous modifiez/ajoutez/supprimez un fichier du répertoire, la modification est automatiquement appliquée au répertoire `public_html`.

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
date=`date +"%H.%M"`

path="public/wp-content"
target="$HOME/Tutorials/Ex-WordPress"
copy="$HOME/Téléchargements/Copies"

cp copy.sh $target
cp copy.sh $copy

cp config.txt $target
cp config.txt $copy

cp -r $path/themes $target
cp -r $path/themes $copy

cp -r $path/plugins $target
cp -r $path/plugins $copy

echo "Copie du dossier WP - $date"
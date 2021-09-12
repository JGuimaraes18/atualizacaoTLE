#!/bin/bash 

txt=txt_original/$1
nome=`echo $1 |cut -d '.' -f1`
data=$2

echo " " >> txt_original/$1

rm 'txt_novo/NOVO_'$data'_'$nome'.txt'

while read linha; do 
	id=`echo $linha | awk '{print $2}'`

	if [ $id == '25994U' ] || [ $id == '27424U' ] || [ $id == '37849U' ] || [ $id == '39084U' ] || [ $id == '40336U' ] || [ $id == '44883U' ] || [ $id == '47699U' ]
	then
		if [ $id == '25994U' ]
		then
			satelite='TERRA'
		fi
		if [ $id == '27424U' ]
		then
			satelite='AQUA'
		fi
		if [ $id == '37849U' ]
		then
			satelite='NPP'
		fi
		if [ $id == '39084U' ]
		then
			satelite='LANDSAT 8'
		fi
		if [ $id == '40336U' ]
		then
			satelite='CBERS-4'
		fi
		if [ $id == '44883U' ]
		then
			satelite='CBERS 4A'
		fi
		if [ $id == '47699U' ]
		then
			satelite='AMAZONIA 1'
		fi
		
		printf "0 $satelite\n" >> 'txt_novo/NOVO_'$data'_'$nome'.txt'
		printf "$linha\n" >> 'txt_novo/NOVO_'$data'_'$nome'.txt'
	else
		printf "$linha\n" >> 'txt_novo/NOVO_'$data'_'$nome'.txt'
	fi

done < "$txt"

printf " " >> 'txt_novo/NOVO_'$data'_'$nome'.txt'

exit

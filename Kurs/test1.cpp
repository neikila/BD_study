#include <stdlib.h>
#include <stdio.h>
#include <time.h>

#define STREETSIZE 622
#define SURNAMESSIZE 221
#define STROKESIZE 30
#define NAMESSIZE 765
#define MAXHOUSENUMBER 30
#define MAXFLATNUMBER 140

char** GetFile(int Size1, FILE* from)
{
	char** mas = new char* [Size1];
	for ( int i = 0; i < Size1; ++i )
	{
		mas[i] = new char [STROKESIZE];
	}
	char c;
	int i = 0;
	int j = 0;
	while ( i < Size1 )
	{
		c = fgetc(from);
		if( c == '\n' || c == EOF)
		{
			mas[i][j] = '\0';
				j = 0;
			++i;
		}
		else
		{
			mas[i][j++] = c;
		}
	}
	return mas;
}

int main()
{
	srand(time(NULL));
	FILE* FSurnames = fopen("Surnames", "r");
	FILE* FNames = fopen("Names", "r");
	FILE* FStreets = fopen("Streets", "r");
	char **Streets = GetFile(STREETSIZE, FStreets);
	char **Surnames = GetFile(SURNAMESSIZE, FSurnames);
	char **Names = GetFile(NAMESSIZE, FNames);
	for ( int i = 0; i < 100; ++i )
	{
		int SurnameIndex = rand()%SURNAMESSIZE;
		int NameIndex = rand()%NAMESSIZE;
		int StreetIndex = rand()%STREETSIZE;
		if ( NameIndex < 202 )
			printf("%d;%sa;%s;%d-%d-%d;г.Москва,ул.%s,д.%d,кв.%d;\n", 10014+i, Surnames[SurnameIndex], Names[NameIndex], 1960 + rand()%37, 1 + rand()%12, 1 + rand()%29, Streets[StreetIndex], 1 + rand()%MAXHOUSENUMBER, 1 + rand()%MAXFLATNUMBER );
		else
			printf("%d;%s;%s;%d-%d-%d;г.Москва,ул.%s,д.%d,кв.%d;\n",10014+i, Surnames[SurnameIndex], Names[NameIndex], 1960 + rand()%37, 1 + rand()%12, 1 + rand()%29, Streets[StreetIndex], 1 + rand()%MAXHOUSENUMBER, 1 + rand()%MAXFLATNUMBER );
	}
}	

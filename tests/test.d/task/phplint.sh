#!/usr/bin/env bash

#############################
# Put testvar overrides here
#############################

# CHECK_DIRS=( \
#     app/code/community/Aoe \
# )
# CHECK_FILE_EXTS=( \
#     php \
# )

source setup.sh

if [ -z "$FILE_LIST" ]; then
    exit 0
fi

FAILURE_FLAG=0

for i in $FILE_LIST
do
    OUTPUT=$(php -l $i)

    if [ $? -ne 0 ]; then
        FAILURE_FLAG=1
    fi

    echo $OUTPUT
done

exit $FAILURE_FLAG
